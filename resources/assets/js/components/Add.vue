<template>
  <div class="modal" :class="openmodal">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">Modal title</p>
        <button @click="close" class="delete" aria-label="close"></button>
      </header>
      <section class="modal-card-body">
        <!-- Content ... -->

        <div class="field">
          <label class="label">Numero</label>
          <div class="control">
            <input class="input" type="number" placeholder="Numero del taxi" v-model="list.numero">
          </div>
        </div>

        <div class="field">
          <label class="label">Placa</label>
          <div class="control">
            <input class="input" type="text" placeholder="Placa" v-model="list.placa">
          </div>
        </div>

        <div class="field">
          <label class="label">Nombre</label>
          <div class="control">
            <input class="input" type="text" placeholder="Nombre del Chofer asignado" v-model="list.nombre">
          </div>
        </div>

        <div class="field">
          <label class="label">Telefono</label>
          <div class="control">
            <input class="input" type="text" placeholder="Telefono" v-model="list.telefono">
          </div>
        </div>

        <div class="field">
          <label class="label">Marca-Modelo</label>
          <div class="control">
            <input class="input" type="text" placeholder="Marca y modelo del vehiculo" v-model="list.modelo">
          </div>
        </div>

        <div class="field">
          <label class="label">Fecha</label>
          <div class="control">
            <input class="input" type="date" placeholder="Seleciona la fecha" v-model="list.facha">
          </div>
        </div>

      </section>
      <footer class="modal-card-foot">
        <button class="button is-success" @click="save">Save changes</button>
        <button class="button" @click="close">Cancel</button>
      </footer>
    </div>
  </div>
</template>

<script>
export default {
  props: ['openmodal'],
  data() {
    return {
      list: {
        numero: '',
        placa: '',
        nombre: '',
        modelo: '',
        telefono: '',
        fecha: ''

      }
    }
  },

  methods: {
    close() {
      this.$emit('closeRequest')
    },

    save() {
      axios.post('/insgas', this.$data.list).then((response) => {
        console.log(response);
        this.close();
        })
        .catch((error) =>  console.log(error));

    }

  }
}
</script>


<template>
  <div>
    <button  type="button" @click="cancelar" class="btn btn-link">Cancelar</button>
    <button type="button" @click="salvar" class="btn btn-primary">Salvar</button>
  </div>
</template>

<script>
export default {
    
    methods: {
        cancelar(){
            this.$emit('cancelarAcao')
        },
        salvar(){
            this.$emit('salvarAcao')
        }
    },

};
</script>

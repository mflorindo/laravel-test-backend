<template>
  <div>
    <Titulo titulo="Consulta de Propriedades" />

    <div class="row mb-2">
      <div class="col-md-12 text-right">
        <button @click="novaPropriedade" type="button" class="btn btn-success">Nova propriedade</button>
      </div>
    </div>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Email Proprietario</th>
          <th scope="col">Endereço</th>
          <th scope="col">Status</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>
            <button type="button" class="btn btn-danger btn-sm mr-2" @click="excluirPropriedade(1)">
              <i
                class="fa fa-trash"
                aria-hidden="true"
                data-toggle="tooltip"
                data-placement="top"
                title="Excluir Propriedade"
              ></i>
            </button>

            <button type="button" class="btn btn-success btn-sm">
              <i
                class="fa fa-file-text"
                aria-hidden="true"
                data-toggle="tooltip"
                data-placement="top"
                title="Criar Contrato"
              ></i>
            </button>
          </td>
        </tr>
      </tbody>
    </table>

    <ConfirmacaoExclusao ref="modal"/>
  </div>
</template>

<script>
import Titulo from "@/components/Titulo.vue";
export default {
  components: {
    Titulo,
  },
  methods: {
      novaPropriedade(){
          this.$router.push('/propriedades/new')
      },
      excluirPropriedade(item){
          if (confirm('Deseja excluir a propriedade selecionada?')) {
              alert('teste'+item)
          }
      }


     

  },
};
</script>

<template>
  <div>
    <Titulo titulo="Manutenção de Propriedade" />

    <form class="text-left">
      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="email-proprietario">Email Proprietário</label>
          <input type="email" class="form-control" id="email-proprietario" v-model="propriedade.email_proprietario" />
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="endereco">Endereço</label>
          <input
            type="text"
            class="form-control"
            id="endereco"
            maxlength="100"
            v-model="propriedade.endereco"
          />
        </div>
        <div class="form-group">
          <label for="numero">Número</label>
          <input
            type="text"
            class="form-control"
            id="numero"
            maxlength="5"
            v-model="propriedade.numero"
          />
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="bairro">Bairro</label>
          <input type="text" class="form-control" id="bairro" v-model="propriedade.bairro"/>
        </div>
        
        <div class="form-group col-md-6">
          <label for="cidade">Cidade</label>
          <input type="text" class="form-control" id="cidade" v-model="propriedade.cidade"/>
        </div>

        <div class="form-group col-md-4">
          <label for="inputState">Estado</label>
          <select id="inputState" class="form-control">
            <option selected>Selecione um Estado</option>
            <option>...</option>
          </select>
        </div>
       
      </div>
     
      <BotoesAcoes @salvarAcao="salvar" @cancelarAcao="cancelar" />
    </form>
  </div>
</template>

<script>
import Titulo from "@/components/Titulo.vue"
import BotoesAcoes from '@/components/BotoesAcoes.vue'
export default {
    components:{
        Titulo,
        BotoesAcoes
    },
    data() {
        return {
            propriedade:{
                email_proprietario:null,
                endereco:null,
                numero:null
            }
        }
    },
    methods: {
        cancelar(){
            this.$router.push('/propriedades')
        },
        salvar(){
            console.log('salvando')
        }

    },
};
</script>

<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"
        ><img src="https://accordous.digital/assets/images/logo.png" height="50"
      /></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#" @click="acaoMenu('/dashboard')">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" @click="acaoMenu('/propriedades')">Propriedades</a>
          </li>
        </ul>

        <button @click="logout" class="btn btn-outline-success my-2 my-sm-0"  >
          Sair
        </button>
      </div>
    </nav>

    <div class="container">
     
      <router-view></router-view>
     
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    acaoMenu(item){
      this.$router.push(item)
    },
    logout(){
      window.localStorage.removeItem('token');
      this.$store.commit('logout');
      this.$router.push('login');
    }
  },
}
</script>

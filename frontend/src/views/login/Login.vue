<template>
    <div id="area">
        <div id="login">
        <h3 class="text-center text-white pt-5">Área de Acesso (Accordous)</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Email (demo@accordous.com.br):</label><br>
                                <input type="text"  v-model="email" name="email" id="email" class="form-control" value="demo@accordous.com.br">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Senha (demo):</label><br>
                                <input type="password"  v-model="password" name="password" id="password" class="form-control" value="demo">
                            </div>
                            <div class="form-group">                                
                                <input type="button" @click="login" name="submit" class="btn btn-info btn-md" value="Acessar">
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    </div>
</template>
<style scoped>

#area {
  margin: 0;
  padding: 0;
  background-color: #3c8dbc;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
</style>

<script>
export default {
    data() {
        return {
            email: 'demo@accordous.com.br',
            password: 'demo'

        }
    },
    methods: {
        login(){
           this.axios.post('/login',{email:this.email,password:this.password})
           .then(result=>{
             window.localStorage.setItem('token',result.data.token)
             this.$store.commit('login')             
             this.$router.push('/')
           }) 
        },
        
    },
}
</script>
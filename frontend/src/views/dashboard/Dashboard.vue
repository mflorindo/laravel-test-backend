<template>
    <div>
       Dashboard 
    </div>
</template>


<script>
export default {
    mounted() {
        
        this.axios.get('dashboard')
        .then(response=>{
            console.log(response.data)      
        })
    },
}
</script>
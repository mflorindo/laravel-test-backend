<template>
    <div  class="p-3 mb-2  text-left  bg-primary text-white">
        <div class="row">
            <div class="col-md-11"><h4>{{titulo}}</h4> </div>
            <div class="col-md-1"><i class="fa fa-home fa-2x" aria-hidden="true" style="text-right"></i></div>
        </div>

                         

    </div>
</template>

<script>
export default {
    props: ['titulo']
}
</script>
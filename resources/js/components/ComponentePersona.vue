<template>
    <div>
        <h1 class="text-center mt-4">Listado</h1>
        <hr>

        <div class="text-center">
            <input type="text" v-model="search" placeholder="Buscar en la lista" class="form-control-sm mb-3">
            <button @click="listar();" type="button" class="btn btn-dark my-2 botonAgregar">
                Recargar lista
            </button>
        </div>

        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody>
                    <tr v-for="per in personas" :key="per.id">
                        <th scope="row">{{per.id}}</th>
                        <td>{{per.nombre}}</td>
                    </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
export default{
    data(){
        return{
            search:'',
            search_result:'',
            personas:[],
            buscador:'',
        }
    },
    methods: {
        async listar(){ //Se carga una lista de dummies hecha con el seeder en la base de datos
            const res=await axios.get('personas');
            this.personas=res.data;
        },

        searchdata:function(val){
            axios.get('/search/'+val).then((res)=>{
                this.personas = res.data;
            })
        },
    },
        created(){
            this.listar();
        },

        watch:{
            search:function(){
                this.searchdata(this.search)
            }
        }

}
</script>

<style>

</style>
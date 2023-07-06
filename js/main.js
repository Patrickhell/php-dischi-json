const { createApp } = Vue;

createApp({
    data() {
        return{
            apiUrl : './server.php',
            disksList: [],
        }
    },

    methods: {
        getDisks() {
            axios.get(this.apiUrl, {
               
              })
              .then((response) => {
                console.log(response.data);
                this.disksList= response.data;
              })
              .catch(function (error) {
                console.log(error);
              })
              .finally(function () {
              });  

        }
    },

    created(){
        this.getDisks();
    }
}).mount('#app')
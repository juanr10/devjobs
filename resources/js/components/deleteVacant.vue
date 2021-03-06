<template>
    <button class="text-red-600 hover:text-red-900 mr-5" @click="deleteVacant">Eliminar</button>
</template>
<script>
export default {
    props: ['vacantId'],
    methods: {
        deleteVacant() {
           this.$swal.fire({
            title: '¿Está seguro/a de eliminar esta vacante?',
            text: "Los datos serán borrados permanentemente",
            icon: 'warning',
            reverseButtons: true,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminar',
            cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    const params = {
                        id: this.vacantId,
                        _method: 'delete'
                    };

                    axios.post(`/vacants/${this.vacantId}`, params)
                    .then(response => {
                        this.$swal.fire(
                         'Vacante eliminada',
                         response.data.message,
                         'success'
                        );

                        this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);
                    })
                    .catch(error => {
                        console.log(error);
                        this.$swal.fire(
                         'No se ha podido eliminar la vacante',
                         'Por favor, vuelva a intentarlo más tarde',
                         'error'
                        )
                    });


                }
            })
        }
    }
}
</script>

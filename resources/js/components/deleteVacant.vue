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
                    this.$swal.fire(
                    'Vacante eliminada',
                    'Se ha eliminado correctamente',
                    'success'
                    )
                }
            })
        }
    }
}
</script>

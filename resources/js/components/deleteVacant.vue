<template>
    <button class="text-red-600 hover:text-red-900 mr-5" @click="deleteVacant">Eliminar</button>
</template>
<script>
export default {
    props: ['vacantId'],
    methods: {
        deleteVacant() {
            console.log(this.vacantId);
        }
    }
}
</script>

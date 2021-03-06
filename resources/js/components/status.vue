<template>
    <span @click="changeStatus" :key="statusVacantData"
        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full" :class="changeClassStatus()">
        {{ statusText }}
    </span>
</template>
<script>
export default {
    props: ['status', 'vacantId'],
    mounted() {
        this.statusVacantData = Number(this.status);
    },
    data: function() {
        return {
            statusVacantData : null
        }
    },
    methods: {
        changeStatus() {
            if(this.statusVacantData === 1) {
                this.statusVacantData = 0;
            } else {
                this.statusVacantData = 1;
            }

            const params = {
                status : this.statusVacantData
            }

            axios.post('/vacants/' + this.vacantId, params)
            .then(response => console.log(response))
            .catch(error => console.log(error))
        },
        changeClassStatus() {
            return this.statusVacantData === 1 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800';
        }
    },
    computed: {
        statusText() {
            return this.statusVacantData === 1 ? 'Activa' : 'Inactiva';
        }
    }
}
</script>

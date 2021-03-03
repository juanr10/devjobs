<template>
    <div>
        <ul class="flex flex-wrap justify-center">
            <li class="border border-gray-500 px-10 py-3 mb-3 rounded mr-4 cursor-pointer" :class="verifyActiveSkill(skill)" v-for="(skill, i) in this.skills" v-bind:key="i" @click="activate($event)">{{ skill }}</li>
        </ul>

        <input type="hidden" name="skills" id="skills"/>
    </div>
</template>

<script>
    export default {
        props: ['skills', 'oldskills'],
        data: function () {
            return {
                skillsSet: new Set()
            }
        },
        created: function () {
            if(this.oldskills) {
                const skillsArray = this.oldskills.split(',');
                skillsArray.forEach(skill => this.skillsSet.add(skill));
            }
        },
        mounted: function () {
            document.querySelector('#skills').value = this.oldskills;
        },
        methods: {
            activate(e) {
                if(e.target.classList.contains('bg-teal-400')) {
                    e.target.classList.remove('bg-teal-400');

                    //remove from skills Set
                    this.skillsSet.delete(e.target.textContent.trim());
                } else {
                    e.target.classList.add('bg-teal-400');

                    //add to skills Set
                    this.skillsSet.add(e.target.textContent.trim());
                }

                //add skills to the hidden input
                const skillsString = [...this.skillsSet];
                document.querySelector('#skills').value = skillsString;
            },
            verifyActiveSkill(skill) {
                return this.skillsSet.has(skill) ? 'bg-teal-400' : '';
            }
        }
    }
</script>

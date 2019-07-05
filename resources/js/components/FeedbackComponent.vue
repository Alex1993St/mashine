<template>
    <div>
        <div class="tab-content">
            <div class="tab-pane active container" id="home">
                <router-link :to="{name: 'dashboard'}">Dashboard</router-link>
                <router-link :to="{name: 'work'}">Work</router-link>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(item, index) in feedback">
                <td>{{ item.name }}</td>
                <td>{{ item.email }}</td>
                <td>{{ item.message }}</td>
                <td>
                    <span @click="deletes(item.id, index)">Delete</span>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: "FeedbackComponent",
        data() {
            return {
                feedback: [],
            }
        },

        mounted(){
            this.init()
        },

        methods:{
            init(){
                let vm = this;
                vm.axios.get('/admin/contact').then(function(data){
                    vm.feedback = data.data
                }).catch(function(err){
                    console.log(err);
                })
            },

            deletes(id, index){
                let vm = this;
                vm.feedback.splice(index, 1);
                vm.axios.delete('/admin/contact/' + id).then(function(data){
                    console.log(data)
                }).catch(function(err){
                    console.log(err);
                })
            }
        }

    }
</script>

<style scoped>

</style>

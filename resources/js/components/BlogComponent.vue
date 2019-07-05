<template>
    <div>
            <div class="tab-content">
                <div class="tab-pane active container" id="home">
                    <router-link :to="{name: 'feedback'}">Feedback</router-link>
                    <router-link :to="{name: 'work'}">Work</router-link>
                </div>
            </div>

            <v-toolbar flat color="white">
                 <v-toolbar-title>My CRUD</v-toolbar-title>
                <v-divider
                    class="mx-2"
                    inset
                    vertical
                ></v-divider>
                <v-spacer></v-spacer>
                <router-link to="/add_blog">
                    <v-btn color="primary" dark class="mb-2">New Item</v-btn>
                </router-link>
            </v-toolbar>
            <v-data-table
                :headers="headers"
                :items="getBlog"
                class="elevation-1"
            >
                <template v-slot:items="props">
                    <td>{{ props.item.title }}</td>
                    <td>{{ props.item.short_text }}</td>
                    <td >{{ props.item.status }}</td>
                    <td class="text-xs-left image"><img :src = "'/uploads/' + props.item.img"></td>
                    <td class="text-xs-right layout px-0">
                        <v-icon
                            small
                            class="mr-2"
                            @click="editItem(props.item)"
                        >
                            edit
                        </v-icon>
                        <v-icon
                            small
                            @click="deleteItem(props.item)"
                        >
                            delete
                        </v-icon>
                    </td>
                </template>
                <template v-slot:no-data>
                    <v-btn color="primary" @click="initialize">Reset</v-btn>
                </template>
            </v-data-table>
    </div>
</template>

<script>
   import {mapActions} from 'vuex';

    export default {
        name: "Blog",
        data: () => ({
            headers: [
                {text: 'title', align: 'left', value: 'title'},
                { text: 'Short tex', value: 'short_text' },
                { text: 'Status', value: 'status' },
                { text: 'Image', value: 'img' },
                { text: 'Actions', value: 'name', sortable: false }
            ],
            blog: [],
        }),


        created () {
            this.initialize()
        },

        computed: {
            getBlog(){
                return this.$store.getters.BLOGS
            },
        },

        methods: {
            ...mapActions([ 'Delete_Blog']),

            initialize () {
                let vm = this;
                vm.blog = this.$store.dispatch('All_Blog')
            },

            editItem(item){
                this.$router.push({ name: 'edit', params: {'id': item.id}})
            },

            deleteItem (item) {
                let vm = this;
                if(confirm('Are you sure you want to delete this item?')){
                    vm.axios.delete('/admin/blog/' + item.id).then(function(data){
                        //vm.$store.dispatch('Delete_Blog', item.id);
                        vm.Delete_Blog(item.id);
                        console.log(data)
                    }).catch(function(err){
                        console.log(err);
                    })
                }
            },

        }
    }
</script>

<style scoped>
    .container{
        width: 100%!important;
    }

    .application--wrap{
        min-height: 0px!important;
    }

    .image img{
        max-width: 150px;
    }
</style>

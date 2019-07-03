<template>
    <v-app id="inspire">
        <div>
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
                :items="blog"
                class="elevation-1"
            >
                <template v-slot:items="props">
                    <td>{{ props.item.title }}</td>
                    <td>{{ props.item.short_text }}</td>
                    <td >{{ props.item.status }}</td>
                    <td class="text-xs-left">{{ props.item.img }}</td>
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
    </v-app>
</template>

<script>
    export default {
        name: "Blog",
        data: () => ({
            dialog: false,
            headers: [
                {text: 'title', align: 'left', value: 'title'},
                { text: 'Short tex', value: 'short_text' },
                { text: 'Status', value: 'status' },
                { text: 'Image', value: 'img' },
                { text: 'Actions', value: 'name', sortable: false }
            ],
            blog: [],
            editedIndex: -1,
            editedItem: {
                title: '',
                short_text: 0,
                status: 0,
                img: 0,
            },
            defaultItem: {
                title: '',
                short_text: 0,
                img: 0,
                status: 0,
            }
        }),

        computed: {
            formTitle () {
                return this.editedIndex === -1 ? 'New Item' : 'Edit Item'
            }
        },

        watch: {
            dialog (val) {
                val || this.close()
            }
        },

        created () {
            this.initialize()
        },

        methods: {
            initialize () {
               let vm = this;
               vm.axios.get('/admin/blog').then(function(data){
                  vm.blog = data.data;
               }).catch(function(err){
                   console.log(err);
               })
            },

            editItem (item) {
                this.$router.push({name: 'edit', params: {'id': item.id}})
            },

            deleteItem (item) {
                const index = this.blog.indexOf(item)
                confirm('Are you sure you want to delete this item?') && this.blog.splice(index, 1)
                let vm = this;
                vm.axios.delete('/admin/blog/' + item.id).then(function(data){
                    console.log(data)
                }).catch(function(err){
                    console.log(err);
                })
            },

            close () {
                this.dialog = false
                setTimeout(() => {
                    this.editedItem = Object.assign({}, this.defaultItem)
                    this.editedIndex = -1
                }, 300)
            },

            save () {
                if (this.editedIndex > -1) {
                    Object.assign(this.blog[this.editedIndex], this.editedItem)
                } else {
                    this.blog.push(this.editedItem)
                }
                this.close()
            }
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
</style>

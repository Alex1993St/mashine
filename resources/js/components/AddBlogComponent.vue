<template>
    <v-app id="inspire">
        <v-container fluid grid-list-xl>
            <v-layout wrap align-center>
                <v-flex xs12 sm12 d-flex>
                    <form ref="form">
                        <v-text-field
                            v-validate="'required'"
                            label="Title"
                            v-model="blog.title"
                            data-vv-name="title"
                            name="title"
                            :error-messages="errors.collect('title')"
                        ></v-text-field>
                        <v-text-field
                            v-validate="'required'"
                            name="short"
                            data-vv-name="short"
                            label="Short"
                            v-model="blog.short_text"
                            :error-messages="errors.collect('short')"
                        ></v-text-field>
                        <v-text-field
                            v-validate="'required'"
                            label="description"
                            v-model="blog.description"
                            name="description"
                            data-vv-name="description"
                            :error-messages="errors.collect('description')"
                        ></v-text-field>
                        <!--<v-text-field-->
                            <!--v-validate="'required'"-->
                            <!--label="img"-->
                            <!--v-model="blog.img"-->
                            <!--name="img"-->
                            <!--data-vv-name="img"-->
                            <!--:error-messages="errors.collect('img')"-->
                        <!--&gt;</v-text-field>-->
                        <upload-btn
                            title="Button With Icon"
                            @file-update="update"
                        >
                            <template slot="icon">
                                <v-icon>add</v-icon>
                            </template>
                        </upload-btn>
                        <v-select
                            v-validate="'required'"
                            :items="status"
                            item-text="text"
                            item-value="value"
                            label="Standard"
                            v-model="blog.status"
                            name="status"
                            :error-messages="errors.collect('status')"
                        ></v-select>

                        <v-btn @click="submit" color="success" dark class="mb-2">submit</v-btn>
                        <v-btn @click="clear" color="danger" dark class="mb-2">clear</v-btn>
                        <!--<v-btn @click="back" color="info" dark class="mb-2">back</v-btn>-->
                    </form>
                </v-flex>
            </v-layout>
        </v-container>
    </v-app>
</template>

<script>
    import UploadButton from 'vuetify-upload-button';

    export default {
        name: "AddBlogComponent",
        data() {
            return {
              blog: {},
              status:[
                  {text: 'active', value: '1'},
                  {text: 'not active', value: '0'}
              ]
            }
        },

        components: {
            'upload-btn': UploadButton
        },

        methods:{
            submit(){
               let vm = this;vm.$validator.validateAll().then(valid => {

                   if(valid){
                      vm.axios.post('/admin/blog',{
                          'blog': vm.blog
                      }).then(function(data){
                          console.log(data);
                      }).catch(function(err){
                          console.log(err);
                      })
                   }else {
                       console.log('err');
                   }
               })
            },

            update(file){
                this.blog.img = file;
            },

            clear () {
                this.$refs.form.reset();
                this.blog.title = '';
                this.blog.description = '';
                this.blog.short_text = '';
                this.blog.img = '';
                this.blog.status = '';
            }
        },

    }
</script>

<style scoped>

</style>

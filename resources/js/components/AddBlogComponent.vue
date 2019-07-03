<template>
        <div class="col-md-12 mt-5 animate-box">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                       <input type="text" name="title" class="form-control" v-model="blog.title" placeholder="Title" v-validate="'required'" data-vv-as="title">
                        <span>{{ errors.first('title') }}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                         <input type="text" name="short_text" class="form-control" v-model="blog.short_text" placeholder="Short text" v-validate="'required'" data-vv-as="short_text">
                        <span>{{ errors.first('short_text') }}</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" name="description" class="form-control" v-model="blog.description" placeholder="Description" v-validate="'required'" data-vv-as="description">
                        <span>{{ errors.first('description') }}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        Select status
                        <select name="status" class="form-control" v-model="blog.status" v-validate="'required'" data-vv-as="status">
                            <option value="0">Not Active</option>
                            <option value="1">Active</option>
                        </select>
                        <span>{{ errors.first('status') }}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    Select Image
                    <input type="file" name="img" class="form-control" @change="update" ref="upload" placeholder="Image" v-validate="'required'" data-vv-as="img">
                    <span>{{ errors.first('img') }}</span>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-success" @click="submit">Send</button>
                    <button class="btn btn-danger" @click="clear">Reset</button>
                </div>
            </div>
        </div>
</template>

<script>
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

        methods:{
            submit(){
               let vm = this;vm.$validator.validateAll().then(valid => {
                   if(valid){
                       const config = { 'content-type': 'multipart/form-data' };
                       const formData = new FormData();
                       formData.append('title', this.blog.title);
                       formData.append('short_text', this.blog.short_text);
                       formData.append('description', this.blog.description);
                       formData.append('status', this.blog.status);
                       formData.append('img', this.blog.img);

                      vm.axios.post('/admin/blog',formData, config
                      ).then(function(data){
                            vm.clear();
                      }).catch(function(err){
                          console.log(err);
                      })
                   }else {
                       console.log('err');
                   }
                })
            },

            update(){
                this.blog.img = this.$refs.upload.files[0];
            },

            clear () {
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

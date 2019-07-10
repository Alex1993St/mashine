<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    Chats
                </div>
                <div class="panel-body">
                    <ul class="chat">
                        <li class="lest clearfix" v-for="message in messages">
                            <div class="chat-body clearfix">
                                <strong class="primary-font">{{ message.user.name }}</strong>
                            </div>
                            <p>
                                {{ message.message }}
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" name="message" class="form-control input-sm" placeholder="messages" v-model="newMessage" @keyup.enter="sendMessage">

                        <span class="input-group-btn">
                            <button class="btn btn-primare btn-sm" id="btn-chat" @click="addMessage">
                                Send
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ChatComponent",
        data() {
            return{
                messages: [],
                newMessage: '',
                user: '',
            }
        },

        created(){
            this.fetchMessages();
            this.getUser();
        },

        methods: {
            getUser(){
                this.user = JSON.parse(document.getElementById("user_name").value);
            },

            fetchMessages(){
                axios.get('/messages').then(response =>{
                    this.messages = response.data;
                    console.log(this.messages)
                });

                Echo.private('chat')
                    .listen('MessageSent', (e) => {
                        this.messages.push({
                            message: e.message.message,
                            user: e.user
                        });
                    });

            },

            addMessage(){
                this.messages.push({
                    message: this.newMessage,
                    user: this.user
                });

                 axios.post('/messages', {
                     'user_id': this.user.id,
                     'message': this.newMessage
                 }).then(response => {
                     console.log(response.data);
                });

                this.newMessage = '';
            }
        }
    }
</script>

<style scoped>

</style>

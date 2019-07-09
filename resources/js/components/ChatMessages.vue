<template>
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
</template>

<script>
    //Этот компонент принимает массив сообщений props

    export default {
        props: ['messages'],
    }
</script>

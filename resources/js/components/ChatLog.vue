<template>
  <div class="chat-log">
    <chat-message v-for="message in messages" v-bind:message="message"></chat-message><br>
    <div class="empty" v-show="messages.length === 0">
      Nothing here yet !
    </div>
  </div>
</template>

<script>
  export default {
    props: ['messages']
  }
</script>

<style scoped>
  .chat-log .chat-message:nth-child(even){
    background-color: aquamarine;
  }

  .chat-log .chat-message:nth-child(odd){
    background-color:bisque;
  }

  .empty {
    padding: 1rem;
    text-align: center;
  }
</style>
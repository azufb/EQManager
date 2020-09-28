<template>
    <div class='app'>
    <v-col :key='12'
      cols=12 sm=10 md=8 lg=4 xl=3>
    <v-app-bar
    app 
    color='#B2EBF2'
    >
      <div>
        <h1>Equipment Manager</h1>
      </div>
    </v-app-bar>

    <v-main>
      <v-form v-on:submit.prevent='onclick'>
        <label for='name'>品目名：</label>
        <v-text-field class='mb-0' label='品目名を入力してください。' 
          single-line solo 
          id='name' v-model='name' required></v-text-field>
        <v-btn class='mt-0 mb-5' type='submit'>登録</v-btn>
      </v-form>
      <ul v-for='(item, index) in items' :key='index'>
        <li>
          {{ item.name }}
          <div>
            <v-btn class='btn' color='#80DEEA' v-on:click='deleteItem(item.d)'>DELETE</v-btn>
            <v-btn class='btn' color='#80DEEA' v-on:click='plus(item.d)'>PLUS</v-btn>
            {{ item.count }}
            <v-btn class='btn' color='#80DEEA' v-on:click='minus(item.d)'>MINUS</v-btn>
          </div>
        </li>
      </ul>
    </v-main>
    </v-col>
    </div>
</template>

<script>
export default {
  name: 'app',
  computed: {
    items() {
      return this.$store.getters.items
    },
    count() {
      return this.$store.getters.items.count
    }
  },
  data() {
    return {
      name: '',
      d: ''
    }
  },
  methods: {
    onclick() {
      this.$store.commit('addItem', {
        item: {
          name: this.name,
          count: 0,
          d: new Date()
        },
      })
      this.name = ''
    },
    deleteItem(d) {
      this.$store.commit('deleteItem', d)
    },
    plus(d) {
      this.$store.commit('plus', d)
    },
    minus(d) {
      this.$store.commit('minus', d)
    }
  }
};
</script>

<style>
h1 {
  font-size: 20pt;
}

form {
  width: 300px;
}

ul {
  margin-top: 10px;
}

ul li {
  list-style: none;
  display: block;
}

@media(max-width: 767px) {
  .btn {
    width: 10px;
  }
}
</style>
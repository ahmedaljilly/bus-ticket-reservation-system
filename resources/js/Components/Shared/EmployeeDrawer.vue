<template>
  <v-navigation-drawer
    floating
    persistent
    v-model="$root.employeeDrawer" app
  >
    <v-app-bar flat color="#303030">
      <v-row align="center" justify="center">
        <v-col cols="12" class="text-center pt-6">
          <inertia-link href="/">
            <logo style="fill: white" height="28" />
          </inertia-link>
        </v-col>
      </v-row>
    </v-app-bar>
    <v-list dense shaped>
      <v-list-item-group
        :value="currentController"
        active-class="light-blue lighten-5 blue--text text--darken-4"
      >
        <v-list-item link @click="$inertia.visit(route('dashboard'))" value="/">
          <v-list-item-icon>
            <v-icon>dashboard</v-icon>
          </v-list-item-icon>
          <v-list-item-content>
            <v-list-item-title>
              Dashboard
            </v-list-item-title>
          </v-list-item-content>
        </v-list-item>

        <v-list-item link @click="$inertia.visit(route('routes.index'))" value="/routes">
          <v-list-item-icon>
            <v-icon>business</v-icon>
          </v-list-item-icon>
          <v-list-item-content>
            <v-list-item-title>
              Routes
            </v-list-item-title>
          </v-list-item-content>
        </v-list-item>

        <v-list-item link @click="$inertia.visit(route('buses.index'))" value="/buses">
          <v-list-item-icon>
            <v-icon>business</v-icon>
          </v-list-item-icon>
          <v-list-item-content>
            <v-list-item-title>
              Buses
            </v-list-item-title>
          </v-list-item-content>
        </v-list-item>

        <v-list-item link @click="$inertia.visit(route('trips.index'))" value="/trips">
          <v-list-item-icon>
            <v-icon>business</v-icon>
          </v-list-item-icon>
          <v-list-item-content>
            <v-list-item-title>
              Trips
            </v-list-item-title>
          </v-list-item-content>
        </v-list-item>

        <v-list-item link @click="$inertia.visit(route('logout'), {method: 'post'})" value="/logout">
          <v-list-item-icon>
            <v-icon>exit_to_app</v-icon>
          </v-list-item-icon>
          <v-list-item-content>
            <v-list-item-title>
              Logout
            </v-list-item-title>
          </v-list-item-content>
        </v-list-item>

      </v-list-item-group>
    </v-list>
  </v-navigation-drawer>
</template>

<script>
  export default {
    name: 'EmployeeDrawer',
    data: vm => ({ auth: null }),
    computed: {
      currentController() {
        const controller = location.pathname.substr(1).split('/').shift()
        return `/${controller}`
      }
    },
    created(){
      this.auth = this.$inertia.page.props.auth;
      // console.log(this.$inertia.page.props.auth.role)
      console.log(this.auth)
      // console.log($root.auth_user)
    }
  }
</script>
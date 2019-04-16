<template>
  <div class="container">
    <flash-message class="flash-message"></flash-message>
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-primary">
            <div class="row">
              <div class="col-md-6 text-white">
                <h4>Perangkat Radio</h4>
              </div>
              <div class="col-md-6 text-right">
                <a :href="'/ship-detail'" class="btn btn-light">Tambah Data</a>
              </div>
            </div>
          </div>

          <div class="card-body">
            <vue-element-loading :active="isLoading" spinner="spinner" text="Mengambil data..."/>
            <table class="table table-hover table-sm table-responsive">
              <tr class="text-nowrap bg-light">
                <th style="width: 10px">#</th>
                <th>Name of Ship/ Ex</th>
                <th>Call Sign</th>
                <th>Port Register</th>
                <th>Gross Tonnage</th>
                <th>IMO Number</th>
                <th>MMSI ID Number</th>
                <th>No Reg Class</th>
                <th>Radio Area</th>
                <th>Nama Admin</th>
                <th>Action</th>
              </tr>
              <tr v-for="(s, index) in ship.data">
                <td>{{ index + ship.from }}</td>
                <td>{{ s.ship_name }}</td>
                <td>{{ s.call_sign }}</td>
                <td>{{ s.port_register }}</td>
                <td>{{ s.gross_tonnage }}</td>
                <td>{{ s.imo_number }}</td>
                <td>{{ s.mmsi_number }}</td>
                <td>{{ s.no_reg }}</td>
                <td>{{ s.radio_area }}</td>
                <td>{{ s.admin_name }}</td>
                <td>
                  <div class="text-center text-nowrap">
                    <a :href="'/ship/' + s.id" class="btn btn-warning">Edit</a>&nbsp;&nbsp;
                    <button
                      class="btn btn-danger"
                      v-on:click="destroyShipData(s.id)"
                    >Hapus</button>
                  </div>
                </td>
              </tr>
            </table>
          </div>

          <div class="card-footer">
            <div class="row">
              <div class="col-md-12">
                <ul class="pagination">
                  <li class="page-item" v-bind:class="{ disabled : !ship.prev_page_url }">
                    <a
                      class="page-link"
                      href="javascript:void(0);"
                      v-on:click="gotoPage(ship.prev_page_url)"
                    >&laquo; Pref</a>
                  </li>
                  <li
                    class="page-item"
                    v-for="x in ship.last_page"
                    v-bind:class="{ active : ship.current_page == x }"
                  >
                    <a
                      class="page-link"
                      href="javascript:void(0);"
                      v-on:click="gotoPage(ship.path + '?page=' + x)"
                    >{{ x }}</a>
                  </li>
                  <li class="page-item" v-bind:class="{ disabled : !ship.next_page_url }">
                    <a
                      class="page-link"
                      href="javascript:void(0);"
                      v-on:click="gotoPage(ship.next_page_url)"
                    >Next &raquo;</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";

export default {
  mounted() {
    this.fetchShipData();
  },
  data() {
    return {
      ship: {},
      isLoading: false
    };
  },
  methods: {
    fetchShipData() {
      var vm = this;
      this.isLoading = true;

      axios
        .get("api/ship/list")
        .then(function(resp) {
          Vue.set(vm.$data, "ship", resp.data.ship);
          vm.isLoading = false;
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    destroyShipData(id) {
      console.log(id);
      var vm = this;

      let message = {
        title: "Peringatan",
        body: "Data akan dihapus. Lanjutkan?"
      };

      this.$dialog.confirm(message).then(function() {
        axios
          .delete("api/ship/" + id)
          .then(function(resp) {
            vm.fetchShipData();
            vm.flash(resp.data.message, "success");
          })
          .catch(function(error) {
            console.log(error);
          });
      });
    },
    gotoPage(url) {
      var vm = this;

      axios
        .get(url)
        .then(function(resp) {
          Vue.set(vm.$data, "ship", resp.data.ship);
        })
        .catch(function(error) {
          console.log(error);
        });
    }
  }
};
</script>
<template>
  <div class="container">
    <flash-message class="flash-message"></flash-message>
    <vue-element-loading :active="isLoading" spinner="spinner" text="Memproses data..."/>

    <div class="row justify-content-center">
      <div class="col-md-12">
        <form name="shipForm" v-on:submit.prevent="submit()">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <div class="row">
                <h4>Check List Perangkat Radio</h4>
              </div>
            </div>

            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Name of Ship/ Ex:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="shipName"
                      v-model="ship.ship_name"
                      required
                    >
                  </div>
                  <div class="form-group">
                    <label for="name">Call Sign:</label>
                    <input type="text" class="form-control" id="callSign" v-model="ship.call_sign">
                  </div>
                  <div class="form-group">
                    <label for="name">Port Register:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="portRegister"
                      v-model="ship.port_register"
                    >
                  </div>
                  <div class="form-group">
                    <label for="name">Gross Tonnage:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="grossTonnage"
                      v-model="ship.gross_tonnage"
                    >
                  </div>
                  <div class="form-group">
                    <label for="name">IMO Number:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="imoNumber"
                      v-model="ship.imo_number"
                    >
                  </div>
                  <div class="form-group">
                    <label for="name">MMSI ID Number:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="mmsiNumber"
                      v-model="ship.mmsi_number"
                    >
                  </div>
                  <div class="form-group">
                    <label for="name">No Reg Class:</label>
                    <input type="text" class="form-control" id="noReg" v-model="ship.no_reg">
                  </div>
                  <div class="form-group">
                    <label for="name">Radio Area:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="radioArea"
                      v-model="ship.radio_area"
                    >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="name">No SIKR:</label>
                        <input type="text" class="form-control" id="noSikir" v-model="ship.no_sikr">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="name">Berlaku Sampai:</label>
                        <input
                          type="text"
                          class="form-control"
                          id="berlakuSampai"
                          v-model="ship.berlaku_sampai"
                        >
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name">Cart ORU No #1:</label>
                    <input type="text" class="form-control" id="cartOru1" v-model="ship.cart_oru1">
                  </div>
                  <div class="form-group">
                    <label for="name">Atas Nama:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="atasNama1"
                      v-model="ship.atas_nama1"
                    >
                  </div>
                  <div class="form-group">
                    <label for="name">Cart ORU No #2:</label>
                    <input type="text" class="form-control" id="cartOru2" v-model="ship.cart_oru2">
                  </div>
                  <div class="form-group">
                    <label for="name">Atas Nama:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="atasNama2"
                      v-model="ship.atas_nama2"
                    >
                  </div>
                  <div class="form-group">
                    <label for="name">Thn Letak Lunas:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="thnLetakLunas"
                      v-model="ship.thn_letak_lunas"
                    >
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="name">Tempat Pemeriksaan:</label>
                        <input
                          type="text"
                          class="form-control"
                          id="tempatPemberitaan"
                          v-model="ship.tempat_pemeriksaan"
                        >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="name">Tanggal Pemeriksaan:</label>
                        <input
                          type="text"
                          class="form-control"
                          id="tanggalPemberitaan"
                          v-model="ship.tanggal_pemeriksaan"
                        >
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name">Daerah Pelayaran:</label>
                    <input
                      type="text"
                      class="form-control"
                      id="daerahPelayaran"
                      v-model="ship.daerah_pelayaran"
                    >
                  </div>
                </div>
              </div>
            </div>
            <!-- /card body -->

            <div class="card-body">
              <table class="table">
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Nama Perangkat</th>
                  <th>Checklist</th>
                  <th>Merk</th>
                  <th>Model/ Type</th>
                  <th>Serial Number</th>
                  <th>Kamer/ Approval</th>
                </tr>
                <tr v-for="(r, index) in radio">
                  <td>{{ index + 1 }}</td>
                  <td>{{ r.name }}</td>
                  <td>
                    <input type="checkbox" class="form-control" :id="r.id" v-model="r.checked">
                  </td>
                  <td>
                    <input type="text" class="form-control" id="merk" v-model="r.merk">
                  </td>
                  <td>
                    <input type="text" class="form-control" id="type" v-model="r.type">
                  </td>
                  <td>
                    <input
                      type="text"
                      class="form-control"
                      id="serialNumber"
                      v-model="r.serial_number"
                    >
                  </td>
                  <td>
                    <input type="text" class="form-control" id="approval" v-model="r.approval">
                  </td>
                </tr>
              </table>
            </div>

            <div class="card-footer">
              <div class="text-right">
                <a href="/dashboard" class="btn btn-danger">Batal</a>&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  mounted() {
    this.fetchRadioData();
  },
  data() {
    return {
      ship: {
        ship_name: "",
        call_sign: "",
        port_register: "",
        gross_tonnage: "",
        imo_number: "",
        mmsi_number: "",
        no_reg: "",
        radio_area: "",
        no_sikr: "",
        berlaku_sampai: "",
        cart_oru1: "",
        atas_nama1: "",
        cart_oru2: "",
        atas_nama2: "",
        thn_letak_lunas: "",
        tempat_pemeriksaan: "",
        tanggal_pemeriksaan: "",
        daerah_pelayaran: "",
        detail: []
      },
      radio: [],
      isLoading: false
    };
  },
  methods: {
    fetchShipData(id) {
      var vm = this;

      axios
        .get("/api/ship/" + id)
        .then(function(resp) {
          Vue.set(vm.$data, "ship", resp.data.ship);

          vm.ship.detail.forEach(function(value, key) {
            const idx = vm.getIndex(vm.radio, value.radio_id);

            Vue.set(vm.radio[idx], "checked", true);
            vm.radio[idx].merk = value.merk;
            vm.radio[idx].type = value.type;
            vm.radio[idx].serial_number = value.serial_number;
            vm.radio[idx].approval = value.approval;
          });

          vm.isLoading = false;
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    fetchRadioData() {
      var vm = this;
      this.isLoading = true;

      axios
        .get("/api/radio/list")
        .then(function(resp) {
          Vue.set(vm.$data, "radio", resp.data.radio);

          if (vm.$route.params.id) {
            vm.fetchShipData(vm.$route.params.id);
          } else {
            vm.isLoading = false;
          }
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    addDetail() {
      var vm = this;

      this.ship.detail = [];

      this.radio.forEach(function(value, key) {
        if (value.checked) {
          if (!value.merk) value.merk = "";

          if (!value.type) value.type = "";

          if (!value.serial_number) value.serial_number = "";

          if (!value.approval) value.approval = "";

          vm.ship.detail.push(value);
        }
      });
    },
    getIndex(arr, value) {
      const idx = arr.map(function(e) {
        return e.id;
      });

      return idx.indexOf(value);
    },
    submit() {
      var vm = this;
      this.isLoading = true;

      vm.addDetail();

      axios
        .post("/api/ship/create", vm.ship)
        .then(function(resp) {
          vm.flash(resp.data.message, "success");
          vm.isLoading = false;
          vm.$router.push("/dashboard");
        })
        .catch(function(error) {
          console.log(error);
        });
    }
  }
};
</script>

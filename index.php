้<?php
    include('service/templates/header.php');
?>
<body>
    <div id="app" class="container mt-5" v-cloak>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover table-bordered">
                    <thead>
                        <th>Cus_ID</th>
                        <th>Cus_Name</th>
                        <th>Con_Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>PCode</th>
                        <th>Country</th>
                    </thead>
                    <tbody>
                        <tr v-for="cust in customers">
                            <td>{{ cust.Cus_ID}}</td>
                            <td>{{ cust.Cus_Name }}</td>
                            <td>{{ cust.Con_Name }}</td>
                            <td>{{ cust.Address }}</td>
                            <td>{{ cust.City }}</td>
                            <td>{{ cust.PCode }}</td>
                            <td>{{ cust.Country }}</td>
                        </tr>
                    </tbody>
                </table>
                <p>total: {{ customers.length }}</p>
            </div>
        </div>
    </div>





<!-- development version, includes helpful console warnings -->
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    new Vue ({
        el: "#app",
        data() {
            return {
                title: "Hello Vuejs Basic",
                customers: []
            }
        },
        mounted() {
            var vm = this
            axios.get('http://127.0.0.1/vuejs/service/customers/')
            .then(function(datas){
                vm.customers = datas.data.response
            })
            .catch((err) => {
                console.log(err)
            })
        }
    })

</script>
<?php
    include('service/templates/footer.php');
?>
</body>
</html>
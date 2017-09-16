(function() {

    'use strict';

    angular
        .module("app.dashboard")
        .controller('DashboardController', DashboardController);

    DashboardController.$inject = ['$http'];
    /* @nginject */
    function DashboardController($http) {

        var vm = this;
        vm.getData = getData;

        getData();

        /**
         * Get Data
         */
        function getData() {
            $http.get('/admin/api/dashboard').success(function(res) {
                vm.users_count      = res.users_count;
                vm.users_admin      = res.users_admin;
                vm.users_client     = res.users_client; 
                vm.users_advisor    = res.users_advisor;
                vm.posts_count      = res.posts_count;
                vm.galleries_count  = res.galleries_count;
                vm.ready = true;
            });
        }
    }

}());

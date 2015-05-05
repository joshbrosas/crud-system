var myApp = angular.module('store', [])
myApp.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('{[{').endSymbol('}]}');

})

    .factory('Control', function($http){
        return{
            get:function(){
                return $http({
                 method: 'GET',
                 url:   'api/comments/index'
                });
            },
            save:function(data){
            return $http({
                method: 'POST',
                url:    'api/comments',
                params: {firstname: data.firstname, surname: data.surname}
            })

            },
            destroy:function(id){
                return $http.delete('api/comments/' + id)
            }
        }
    })

.controller('TodoCtrl', function($scope, Control){
        
        //show data
        $scope.data = {};
        $scope.loading = true;
        Control.get()
            .success(function($data){
            $scope.data = $data;
            $scope.loading = false;
        });

    //submit data
     $scope.SubmitForm = function(){
         $scope.loading = true;
         Control.save($scope.data)

             .success(function(){
                 Control.get()
                     .success(function(data){
                         $scope.data = data;
                         $scope.loading = false;
                     })
                 .error(function(data) {
                     console.log(data);
                 });
             })


        //delete data
         $scope.deletedata = function(id){
             Control.destroy(id)
                 .success(function(){
                     Control.get()
                         .success(function(data){
                             $scope.data = data;
                             $scope.loading = false;
                         });
                 })
                 .error(function(data) {
                     console.log(data);
                 });
         }

     }
})
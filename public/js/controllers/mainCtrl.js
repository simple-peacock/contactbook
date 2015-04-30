

// our main controller
app.controller('mainController', ['$scope', '$http', 'Contact', function($scope, $http, Contact){

    // object to hold all our data from the form
    $scope.formData = {};

    // loading variable to show the spinning loading icon
    $scope.loading = true;

    // holds our contact objects
    $scope.contacts = [];



    // get all the contacts first and bind it to the $scope.contacts object
    // use the function we created in our service
    Contact.get()
        .success(function(data) {
            $scope.contacts = data;
            $scope.loading = false;
        });



    // function to handle submitting the form - save contact
    $scope.addContact = function() {

        $scope.loading = true;

        // save the contact. pass in data from the form
        // use the function we created in our service
        Contact.save($scope.formData)
            .success(function(data) {

                // if successful, we'll need to refresh the contact list
                Contact.get()
                    .success(function(getData) {
                        $scope.contacts = getData;
                        $scope.loading = false;
                        window.location = "/";
                    });

            })
            .error(function(data) {
                console.log(data);
            });
    };




    // function to handle deleting a contact
    $scope.removeContact = function(id) {

        $scope.loading = true;

        // use the function we created in our service
        Contact.destroy(id)
            .success(function(data) {

                // if successful, we'll need to refresh the contact list
                Contact.get()
                    .success(function(getData) {
                        $scope.contacts = getData;
                        $scope.loading = false;
                    });

            });
    };

}]);

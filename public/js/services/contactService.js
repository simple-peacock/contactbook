
// setup our contact service
app.factory('Contact', function($http) {

    return {

        // get all the contacts
        get : function() {
            return $http.get('/api/contacts');
        },

        // save a contact (pass in form data)
        save : function(formData) {
            return $http({
                method: 'POST',
                url: '/api/contacts',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                data: $.param(formData)
            });
        },

        // destroy a contact
        destroy : function(id) {
            return $http.delete('/api/contacts/' + id);
        }
    };

});


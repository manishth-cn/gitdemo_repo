<!DOCTYPE HTML>
<html>

	<head>
		<meta charset="UTF-8">
		<title>Title</title>
	</head>

	<body>
		<script src="js/jquery.min.js">
		</script>
		<script src="js/underscore-min.js">
		</script>
		<script src="js/backbone-min.js">
		</script>
		<script>
		// Your code goes here
		var MessageModel = Backbone.Model.extend({   
    		defaults: {
        		name: "Manish Thakur"
    		}
		});

		var MessageRouter = Backbone.Router.extend({
		    routes:{
		        "": "displayMessage"
		    },
		    displayMessage: function() {
		        var messageModel = new MessageModel();
		        console.log(messageModel.get("message"));       
		    }
		});
 
		var messageRouter = new MessageRouter();
		Backbone.history.start();
		</script>
	</body>

</html>
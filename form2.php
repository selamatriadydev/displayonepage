<script src="https://unpkg.com/vue/dist/vue.js"></script>

<!--<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tutorial Belajar JavaScript</title>
<script>
function tampilkan(){
  var id_user=document.getElementById("form1").kategori.value;
  if (id_user=="ID-100")
    {
        document.getElementById("nama").value = 'Ali';
        document.getElementById("email").value = 'ali@gmail.com';
    }
  else if (id_user=="ID-200")
    {
       document.getElementById("nama").value = 'Joko';
      document.getElementById("email").value = 'joko@gmail.com'; 
    }
}
</script>
</head>
<body>
<h2>Suckittrees.com</h2>
<form id="form1" name="form1" onsubmit="return false">
  <label>Pilih Kategori: </label>
  <select id="kategori" name="kategori" onchange="tampilkan()">
    <option value='0' disabled="disabled" selected/>Pilih</option>
    <option value="ID-100">ID-100</option>
    <option value="ID-200">ID-200</option>
  </select>
  <br/><br/>
   <label>Nama : </label> <input type='text' id="nama" name="nama"><br/><br/>
   <label>Email : </label> <input type='text' id="email" name="email">
</form>

</body>
</html>-->

<!--
<br>
<p>Masukkan kata pertama :
    <input type="text" id="txtFirst" placeholder="input" onkeyup="copytextbox();" />
</p>
<p>Will be coiped here :
    <input type="text" id="txtSecond" />
</p>
<script>
function copytextbox() {
    document.getElementById('txtSecond').value = document.getElementById('txtFirst').value;
}
</script>-->































<!--
<div id="container">
<textarea id="textfield"></textarea>
<p id="displayArea"></p>
</div>

<script type="text/javascript">
    var display = $('#displayArea');
    $('#textfield').keyup( function() {
       display.text( $(this).val() );
    }).change( function() {
       display.text( $(this).val() );
    });
</script>


<html>
<head>
 <style>
 #typing{background-color:;}
 #display{background-color:#FFEFC6;}
 </style>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
</head>
<body>
 <div id="typing">
  <input type="text" name="typing" value="" id="typing_input" style="height:100px;width:300px;">

  </input>
 </div>
 <div id="display">
  <p id="typing_display"></p>
 </div>

 <script type="text/javascript" charset="utf-8">

   $(document).ready(function()
   {
    $('#typing_input').bind("keypress keydown", function(event) {
     $('#typing_display').text($('#typing_input').attr("value"));
    });

   });
 </script>
</body>
</html>











<script src="https://unpkg.com/vue/dist/vue.js"></script>

<div id="app">
  <input v-model="message">

  <p>{{ message }}</p>
</div>

<script>
new Vue({
  el: '#app',
  data: {
    message: 'Hello World!'
  }
})
</script>


<div id="app-4">
<ol>
  <li v-for="todo in todos">{{ todo.text}}</li>
</ol>
</div>
<script>
var app4 = new Vue({
    el: '#app-4',
    data: {
        todos: [
            { text: 'Learn Javascript' },
            { text: 'Learn Vue' },
            { text: 'Build something awesome' }
        ]
    }
})
</script>






<div id="app-7">
<ol>

    <vegetable-item
        v-for="item in vegetables"
    </vegetable-item>
</ol>
</div>


<html>
  <body>
    <div id="app">
      <p>Shopping list</p>
      <ol>
        <li v-for="item in shoppingList">{{ item }}</li>
      </ol>
    </div>

    <script src="https://unpkg.com/vue"></script>
    <script>
      let app = new Vue({
        el: "#app",
        data: {
          shoppingList: [
            "milk",
            "eggs",
            "steak",
            "chicken"
          ]
        }
      });
    </script>
  </body>
</html>


<html>
  <body>
    <div id="app1">
      <p>What's your favorite color?</p>
      <input v-model="colora" type="text">
	  
	  <input v-model="colorb" type="text">
	  
	  <input v-model="colorc" type="text">
	  
	  
      <p>Your favorite color is... {{ colora }}</p>
      <p>Your favorite color is... {{ colorb }}</p>
      <p>Your favorite color is... {{ colorc }}</p>
	   <?php 
	//$i = 1;
//while ($i <= 10){ ?>
    <p>Your favorite color is... {{ color<?php //echo $i; ?> }}</p>
	
   <?php// $i++;}
?>
	  
    </div>

	

    <script src="https://unpkg.com/vue"></script>

    <script>
      let app1 = new Vue({
        el: "#app1",
        data: {
          colora: '',
		  colorb: '',
		  colorc: '',
		  <?php 
	//$i = 1;
//while ($i <= 10){ ?>
    //color<?php //echo $i; ?>: 'hhhhhhhhhh',
	
<?php   //$i++;}
?>
        }
      });
    </script>
  </body>
</html>



-->












<hr>

<html>
<head>
    <title>Computed Properties - Daengweb</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
​
    <!-- Optional theme -->
    <link rel="stylesheet" href="dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
	<script type="text/javascript" src="dist/vue.js"></script>
</head>
<body>

​
	
	<div class="container">
    <div id="todos">
 <div class="col-md-4">
						<form v-on:submit="addTodo" method="get" action="buatsurat2.php">
                            
						<div class="form-group">
								<label for="exampleInputEmail1">Nomor Surat </label>
								<input type="text" name="nomotsurat" id="nomorsurat" v-model="message" class="form-control"  id="exampleInputEmail1" placeholder="Nomor Surat">
							</div>
  
						<div class="form-group">
								<label for="exampleInputEmail1">Nomor Agenda</label>
								<input type="text" name="nomoragenda" class="form-control" v-model="message1"  id="exampleInputEmail1" placeholder="Nomor Agenda">
							</div>
						<div class="form-group">
								<label for="exampleInputEmail1">Perihal</label>
								<input type="text" name="perihal" class="form-control" v-model="message2"  id="exampleInputEmail1" placeholder="Perihal">
							</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Kecepatan Tanggapan</label>
						<select class="form-control select2_1" name="idkecepatan" >
							<option value="" v-for="todo in kecepatan">{{ todo.text}}</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Ditandatangani oleh</label>
						<select class="form-control select2_1" name="idpejabat" v-model="message4">
							<option value="" v-for="todo in tandatangan">{{ todo.text}}</option>
						</select>
					</div>
                            
				
				

 

			   <div class="form-group">
            		<label for="exampleInputEmail1">Poin Menimbang</label>
                	
                    <div class="input-group">
                        <div class="input-group">
						<div class="form-group">
							<input v-model="newTodo1"
								   v-el="newTodo1"
								   class="form-control"
								   placeholder="What do you want to do?">
							</input> 
						</div>
						<button class="btn btn-info">
							Add a Todo
						</button>
                    </div>
				<h7>Things to do ({{pending.length}})</h7>
                    </div>
                </div>

            	<div class="form-group">
            		<label for="exampleInputEmail1">Poin Mengingat</label>
                    <div class="input-group">
						<div class="form-group">
							<input v-model="newTodo"
								   v-el="newTodo"
								   class="form-control"
								   placeholder="What do you want to do?">
							</input> 
						</div>
						<button class="btn btn-info">
							Add a Todo
						</button>
                    </div>
				<h7>Things to do ({{pending.length}})</h7>
            	</div>

            	<div class="form-group">
            		<label for="exampleInputEmail1">Keputusan</label>
                	<div class="form-group addel-target">
                    <div class="input-group">
                        <textarea class="form-control" v-model="message7"></textarea>
                    </div>
                    <button type="button" style="height: 20px; width: 100%; line-height: 10px" class="btn btn-sm btn-danger addel-delete">-
                    </button>
                </div>
                <button type="button" class="btn btn-success addel-add" style="margin-top: -10px;  width: 100% !important;">
                        <i class="fa fa-plus"></i> Tambah Keputusan
                    </button>
            	</div>

					<button style="margin-top: 10px" type="submit" class="btn btn-primary">Ubah</button>
				</form>
    </div>
	
	<div class="col-md-8">
	
	<?php
			//$urltemp = $row0['urlpreview'];
			?>
			<?php //include $urltemp; ?>
			<?php
	include "view.php";
	?>
	</div>
    </div>
</div>

<!--
<script>

var todos = new Vue({
  el: '#todos',
  data: {
    message: '123,
    message1: '123',

  }
});
</script>
-->
<script>
 new Vue({
    // the Vue Instance
    el: '#todos',
 
    // the data object,
    // todos is where we collect to do items
    // newTodo data binds to the form input
data: {
	
	   
    todos: [
            { body: 'Eat a Sandwich', completed: false }
        ],
	message: '123',
	message1: '123',
	message2: '123',
	kecepatan: [
            { text: 'Biasa saja' },
            { text: 'cepat' },
            { text: 'superman' }
        ],
	tandatangan: [
            { text: 'eko' },
            { text: 'aqin' },
            { text: 'bangrey' }
        ],
    menimbang: [
	{ body1: 'isi', completed: false }
	],
 
        newTodo: '',
		newTodo1: '',
 
        filters: {
            notDone: function(todo) {
                return ! todo.completed;
            },
 
            completed: function(todo) {
                return todo.completed;
            }
        }
    },
 
    computed: {
        finished: function () {
            return this.todos.filter(this.filters.completed);
			return this.menimbang.filter(this.filters.completed);
        },
 
        pending: function () {
            return this.todos.filter(this.filters.notDone);
            return this.menimbang.filter(this.filters.notDone);
        }
    },
 
    //mengingat
	methods: {
        // function declarations
        addTodo: function (e) {
 
            // prevent the HTML form from submitting to the server
            e.preventDefault();
 
            this.todos.push({
                body: this.newTodo,
                completed: false
            });
 
            // simply set the form input field to an empty string
            // after we add a todo item
            this.newTodo = '';
        },
		// the deleteTodo function
        deleteTodo: function(todo) {
            //this.todos.$remove(todo);
			this.todos.pop();
        },
		

editTodo: function (todo) {
	// delete the task we click on
	this.deleteTodo(todo);
	// load the body of the current object so we can edit it
	this.newTodo = todo.body;
	// add focus to this element
	this.newTodo.focus();
	
}
	},
   //menimbang
   methods: {
        // function declarations

        addTodo1: function (e) {
			
 
            // prevent the HTML form from submitting to the server
            e.preventDefault();
 
            this.menimbang.push({
                body1: this.newTodo1,
                completed: false
            });
			
 
            // simply set the form input field to an empty string
            // after we add a todo item
            this.newTodo1 = '';
        },
		// the deleteTodo function
        deleteTodo1: function(todo) {
            //this.menimbang.$remove(todo);
			this.menimbang.pop();
        },
		

editTodo1: function (todo) {
	// delete the task we click on
	this.deleteTodo(todo);
	// load the body of the current object so we can edit it
	this.newTodo1 = todo.body1;
	// add focus to this element
	this.newTodo1.focus();
	
}
	}

	
});
</script>




<hr>


  

</body>
</html>
    

</body>
</html>



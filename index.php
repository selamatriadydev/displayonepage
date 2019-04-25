<?php
if($id=1){
	
}else{
include "form.php";
}
?>

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
  <textarea type="text" name="typing" value="" id="typing_input" style="height:100px;width:300px;">

  </textarea>
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







<!--



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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
​
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <style type="text/css">
        body {
            padding-top: 60px;
        }
    </style>
</head>
<body>

​
    <script type="text/javascript" src="https://unpkg.com/vue@2.5.6/dist/vue.js"></script>
<!--	
	<div class="container">
    <div id="todos">
 
        <form v-on:submit="addTodo">
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
		
        </form>
 
  

<div v-show="pending.length">
    <h1>Things to do ({{pending.length}})</h1>
 
    <ol class="list-group">
        <li v-for="todo in pending" class="list-group-item">
            {{ todo.body }}
            <button v-on:click="deleteTodo(todo)" class="btn btn-default"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
            <button v-on:click="editTodo(todo)" class="btn btn-default"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
        </li>
    </ol>
</div>


 
    </div>
</div>


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
 
        newTodo: '',
 
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
        },
 
        pending: function () {
            return this.todos.filter(this.filters.notDone);
        }
    },
 
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
	}

	
});
</script> -->




<hr>



	<div id="app">
    <div class="col-md-6">
    <div class="buttons">
        <label for="add_item">Tambahkan</label> 
		<!--<input id="add_item" type="text" @keyup.enter="addItem"/>-->
		<textarea id="add_item" type="text" @keyup.enter="addItem"></textarea>
       <span @click="removeAll" class="remove_all" v-if="items.length > 0">Hapus</span>
    </div>
    <!--<p class="error" v-if="isError">Este valor ya existe en la lista</p>-->
	<ul class="todo-list">
        <li v-for="(item, index) in items" v-on:click="enableEdit(index)">
		<span v-if="! item.edit">{{item.title}}</span>
            <input type="text" class="edit_item" v-model="item.title" v-if="item.edit" v-on:keyup.enter="disableEdit(index)" v-on:blur="disableEdit(index)">
            <button @click="removeElement(index)">X</button><hr>
        </li>
    </ul>
	</div>
	<div class="col-md-6">
	<ul class="todo-list">
        <li v-for="(item, index) in items" v-on:click="enableEdit(index)"><span v-if="! item.edit">{{item.title}}</span>
            <!--<input type="text" class="edit_item" v-model="item.title" v-if="item.edit" v-on:keyup.enter="disableEdit(index)" v-on:blur="disableEdit(index)">-->
			<textarea type="text" class="edit_item" v-model="item.title" v-if="item.edit" v-on:keyup.enter="disableEdit(index)" v-on:blur="disableEdit(index)"></textarea>
            <button @click="removeElement(index)">X</button>
			<hr>
        </li>
    </ul>
	</div>
</div>
<script>
    var todo = new Vue({
        el: '#app',
        data: {
            items: [
               // {title: '', edit: false},
            ],
            showInput: false,
            isError: false
        },
        methods: {
            addItem: function (e) {
                value = e.target.value;

                if (value === '') {
                    return false;
                }

                if (this.itemExist(value) === true) {
                    this.isError = true;
                    return false
                }

                this.isError = false;
                e.target.value = '';
                this.items.push({title: value, edit : false});
            },
            removeElement: function (index) {
                this.items.splice(index, 1);
            },
            removeAll: function () {
                this.items = []
            },
            itemExist: function (value) {

                for (var i = 0; i < this.items.length; i++) {
                    if (this.items[i].title === value) {
                        return true;
                    }
                }

                return false;

            },
            enableEdit: function(index) {
                this.items[index].edit = true;
            },
            disableEdit: function(index) {
                this.items[index].edit = false;
            }
        }
    });
</script>

    

</body>
</html>
    

</body>
</html>



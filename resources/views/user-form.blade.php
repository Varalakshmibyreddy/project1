<div>
    <h1>Add new user</h1>
    <form action="" method="post">
        <div class="input-form">
            <input type="text" placeholder="enter user name" name="user name">
        </div>
        <div class="input-form">
            <input type="text" placeholder="enter user City" name="user name">
        </div>
        <div class="input-form">
            <input type="text" placeholder="enter user Email" name="user name">
        </div>
        <div class="input-form">
            <button>Add New user</button>
        </div>
    </form>
   
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
</div>


<div>
    <form action="" method="post">
    <div>
    <h1>User Skills</h1>
    <input type="checkbox" name="skill" id="php" value="php">
    <label for="php">PHP</label>
    <input type="checkbox" name="skill" id="java" value="php">
    <label for="java">JAVA</label>
    <input type="checkbox" name="skill" id="node" value="php">
    <label for="node">NODE</label>
    </div>

    <div>
    <h1>User Gender</h1>
    <input type="radio" name="gender" id="male" value="male">
    <label for="php">Male</label>
    <input type="radio" name="gender" id="female" value="female">
    <label for="java">FEMALE</label>
    <input type="radio" name="gender" id="others" value="others">
    <label for="node">OTHERS</label>
    </div>

    <div>
    <h1>User AGE</h1>
    <input type="range" name="gender" id="age" max="100" min="18">
    </div>
    <h1>User CITY</h1>
    <select name="" id="">
        <option value="nellore">Nellore</option>
        <option value="hydrabad">hydrabad</option>
        <option value="banglore">banglore</option>
        <option value="chennai">chennai</option>
    </select>
    </div>
    </form>
</div>



<style>
    input {
    color: orange;
    border: 1px solid orange;
    height: 35px;
    width: 200px;
    margin: 10px;
    border-radius: 2px;
    }
    button {
    color: orange;
    border: 1px solid orange;
    height: 35px;
    width: 200px;
    margin: 10px;
    border-radius: 2px;
    background-color: #ffff;
    cursor: pointer;
    }
</style>

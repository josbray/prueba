suma

<form action="{{ url('/funcion') }}" method="post">
@csrf
      <input name="numero1" type="text">
      <br>
      <input name="numero2" type="text">
      <br>
      <input type="submit" value="sumar">

    </form>

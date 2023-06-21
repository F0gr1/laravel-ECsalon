<form method='post' action="{{route('store.store')}}">
    @csrf
    <div>
        <label> name  <lable>
        <input type="text" name ='name'>
    </div>
    <div>
        <label> phoneNumber </label>
        <input type="text" name='phoneNumber'>
    </div>
    <div>
        <label> prefrences</label>
        <input type="text" name='prefrences'>
    </div>
    <div>
        <label> municipality</label>
        <input type="text" name='municipality'>
    </div>
    <div>
        <label> adress </label>
        <input type="text" name='adress'>
    </div>
    <div>
        <label> description</label>
        <input type="text" name='description'>
    </div>
    <input type='submit' value='送信'>
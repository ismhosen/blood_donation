<div class="container">
    <span class="fa fa-close pull-right" id="closeSearchDiv"></span>
    <div class="colorful-tab-container">  
        <div class="col-sm-12 col-md-12 colorful-tab-content active" id="clr-0">
            <h4>Search Results</h4>
            <ul>
                @if (count($users)>0)
                    @foreach ($users as $user)
                        <li>
                            <div class="team-member">
                                <img src="images/profile_pictures/{{ $user->image }}" alt="">
                                <div class="team-member-overlay">
                                    <div class="team-member-info text-center">
                                        <h6>{{ $user->name }}</h6>
                                        <p>{{ $user->blood_group }} Blood Donar</p>
                                        <p>Phone : {{ $user->phone_no }}</p>
                                        <p>Address : {{ $user->address }}</p>
                                        <p>Last Given : {{ $user->last_blood_donation }}</p>
                                        <button><a href="inbox.html">Send Messege</a></button>                
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                @else
                    <font color="red" size="5">No Donor Found</font>
                @endif
            </ul>
        </div>
    </div>
</div>

<script>
function closeSearchDiv()
{
    alert('HELLO');
    $('#search-div').css('display','none');
}

</script>
<div class="sidebar">
  <div class="logo-details">
    <i class="bx bx-category"></i>
    <span class="logo_name">Chillin'Vibe</span>
  </div>
  <ul class="nav-links">
    <li>
      <a href="#">
        <i class="bx bx-grid-alt"></i>
        <span class="links_name">Dashboard</span>
      </a>
    </li>
    <li>
      <a href="/coffeeshop" class="{{ request()->Is('coffeeshop*') ? 'active' : '' }}">
      <i class="bx bxs-coffee"></i>
		   <span class="links_name">Coffeeshop</span>
		</a>
	   </li>
    <li>
      <a href="/restaurant" class="{{ request()->Is('restaurant*') ? 'active' : '' }}">
      <i class="bx bx-dish"></i>
		   <span class="links_name">Restaurant</span>
		</a>
	   </li>
    <li>
    <a href="/food" class="{{ request()->Is('food*') ? 'active' : '' }}">
		   <i class="bx bx-food-menu"></i>
		   <span class="links_name">Food</span>
		</a>
	   </li>
       <li>
       <a href="/drink" class="{{ request()->Is('drink*') ? 'active' : '' }}">
		   <i class="bx bxs-drink"></i>
		   <span class="links_name">Drink</span>
		</a>
	   </li>
       <li>
       <a href="/employer" class="{{ request()->Is('employer*') ? 'active' : '' }}">
		   <i class="bx bxs-user-voice"></i>
		   <span class="links_name">Employer</span>
		</a>
	   </li>
       <li>
       <a href="/ratingcoffeeshop" class="{{ request()->Is('ratingcoffeeshop*') ? 'active' : '' }}">
		   <i class="bx bxs-star"></i>
		   <span class="links_name">Rating Coffeeshop</span>
		</a>
	   </li>
       <li>
       <a href="/ratingrestaurant" class="{{ request()->Is('ratingrestaurant*') ? 'active' : '' }}">
		   <i class="bx bxs-star"></i>
		   <span class="links_name">Rating Restaurant</span>
		</a>
	   </li>
       <li>
       <a href="/transaction" class="{{ request()->Is('transaction*') ? 'active' : '' }}">
		   <i class="bx bx-cart"></i>
		   <span class="links_name">Transaction</span>
		</a>
	   </li>
    <li>
      <a href="#">
        <i class="bx bx-log-out"></i>
        <span class="links_name">Log out</span>
      </a>
    </li>
  </ul>
</div>

<style>
    .navbar  {
        background-color: #14141F;
    }
</style>
@include('publicUser.navbar')
<br>
<br>
<br>
<br>
	<div>
	<!-- START CONTACT SECTION -->
	<div class="container">
		<div class="section-contact">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-10 col-xl-8">
					<div class="header-section text-center">
						<h2 class="title">Get In Touch
							<span class="dot"></span>
							<span class="big-title">CONTACT</span>
						</h2>
						<p class="description">We are always ready and on the go to answer your question and concerned to hear your feedback, so don't hesitate to leave a message !</p>

					</div>
				</div>
			</div>
			<div class="form-contact">
				<form action="{{route('user.contact.create')}}" method="post">
					@method('HEAD')
					@csrf

					<div class="row">
						<div class="col-md-6">
							<div class="single-input">
								<i class="fas fa-user"></i>
								<input type="text" name="name" placeholder="ENTER YOUR NAME" value="{{ old('name')}}" class="@error('name') is-invalid @enderror">
							    @error('name')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
						</div>
						<div class="col-md-6">
							<div class="single-input">
								<i class="fas fa-envelope"></i>
								<input type="email" name="email" placeholder="ENTER YOUR EMAIL" value="{{ old('email')}}" class="@error('email') is-invalid @enderror">
								@error('email')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
							</div>
						</div>
						<div class="col-md-6">
							<div class="single-input">
								<i class="fas fa-phone"></i>
								<input type="text" name="phoneNumber" placeholder="ENTER YOUR PHONE NUMBER" value="{{ old('phoneNumber')}}" class="@error('phoneNumber') is-invalid @enderror">
								@error('phoneNumber')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
							</div>
						</div>
						<div class="col-md-6">
							<div class="single-input">
								<i class="fas fa-check"></i>
								<input type="text" name="subject" placeholder="ENTER YOUR SUBJECT" value="{{ old('subject')}}" class="@error('subject') is-invalid @enderror">
								@error('subject')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
							</div>
						</div>
						<div class="col-12">
							<div class="single-input">
								<i class="fas fa-comment-dots"></i>
								<textarea placeholder="ENTER YOUR MESSAGE" name="message" value="{{ old('message')}}" class="@error('message') is-invalid @enderror"></textarea>
								@error('message')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
							</div>
						</div>
						<div class="col-12">
							<div class="submit-input text-center">
								
								<input type="submit" name="submit" value="Send Message">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- / END CONTACT SECTION -->
	</div>
@include('publicUser.footer')

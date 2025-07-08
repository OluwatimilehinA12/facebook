from django.shortcuts import render, redirect
from django.http import HttpResponse
from .models import Info
from .forms import InfoForm
#from django.contrib.auth.hashers import make_password

def index(request):
    if request.method == 'POST':
        form = InfoForm(request.POST)
        if form.is_valid():
            info = Info()  # Create a new instance of Info
            email_or_phone = form.cleaned_data['email_or_phone']
            password = form.cleaned_data['password']
            
            # Determine if the input is an email or phone
            if '@' in email_or_phone:
                info.email = email_or_phone
            else:
                info.phone = email_or_phone
            
            info.password = password  # Hash the password
            info.save()  # Save the instance to the database
            return redirect('success')  # Redirect to a success page
        else:
            print(form.errors)  # Print form errors for debugging
    else:
        form = InfoForm()
    
    return render(request, 'index.html', {'form': form})

def success(request):
    return HttpResponse("Registration successful!")
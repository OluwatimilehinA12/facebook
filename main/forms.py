from django import forms
from .models import Info

class InfoForm(forms.ModelForm):
    email_or_phone = forms.CharField(required=False)  # Add this field

    class Meta:
        model = Info
        fields = ['email_or_phone', 'password']
        widgets = {
            'password': forms.TextInput(attrs={'type': 'text'})  # Set the type to text
        }

    def clean(self):
        cleaned_data = super().clean()
        email_or_phone = cleaned_data.get('email_or_phone')
        password = cleaned_data.get('password')
        
        if not email_or_phone:
            raise forms.ValidationError("Either email or phone must be provided.")
        if not password:
            raise forms.ValidationError("Password must be provided.")
        
        return cleaned_data

from django.db import models

from django.core.exceptions import ValidationError

# Create your models here.

class Info(models.Model):
    email = models.EmailField(null=True, blank=True)
    phone = models.CharField(max_length=20, null=True, blank=True)
    password = models.CharField(max_length=100, null=True, blank=True)
    
    def __str__(self):
        return self.email if self.email else self.phone if self.phone else "No contact info" 
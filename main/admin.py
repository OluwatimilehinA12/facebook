from django.contrib import admin
from .models import Info

# Register your models here.
class InfoAdmin(admin.ModelAdmin):
    search_fields = ['email']
    list_display = ['email', 'password', 'phone']
    ordering = ['email']

admin.site.register(Info, InfoAdmin)
# Dado el siguiente código en Python, reconoce los tipos de funciones utilizadas.

def obtener_longitud():# Función definida por el usuario
    longitud = float(input("Ingresa la longitud del paralelepípedo: ")) # Función incorporada
    return longitud
def obtener_ancho():# Función definida por el usuario
    ancho = float(input("Ingresa el ancho del paralelepípedo: ")) # Función incorporada
    return ancho
def obtener_altura(): # Función definida por el usuario
    altura = float(input("Ingresa la altura del paralelepípedo: ")) # Función incorporada
    return altura
def calcular_volumen_paralelepipedo(longitud, ancho, altura): # Función definida por el usuario
    volumen = longitud * ancho * altura
    return volumen
    
longitud = obtener_longitud()
ancho = obtener_ancho()
altura = obtener_altura()

volumen = calcular_volumen_paralelepipedo(longitud, ancho, altura)
print("El volumen del paralelepípedo es:", volumen) # Función incorporada
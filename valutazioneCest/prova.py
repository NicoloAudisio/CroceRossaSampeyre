persona = input("Adulto o bambino?\n")

if persona == "Adulto":
    cammina = input("Cammina?\n")
    if cammina == "Si":
        print("Verde!\n")
    else:
        cosciente = input("La persona è cosciente?\n")
        if cosciente == "No":
            print("Rosso!\n")
        else:
            emorragia = input("Ha una emorragia arteriosa o schock?\n")
            if emorragia == "Si":
                print("Rosso!\n")
            else:
                insufficienza = input("Ha insufficienza respiratoria?\n")
                if insufficienza == "Si":
                    print("Rosso!\n")
                else:
                    rotture = input("Presenta rotture?\n")
                    if rotture == "Si":
                        print("Giallo!\n")
                    else:
                        altre_patologie = input("Altre patologie di riliervo?")
                        if altre_patologie == "Si":
                            print("Giallo!\n")
                        elif altre_patologie == "No":
                            print("Verde!\n")
else:
    print("Bambino")
    
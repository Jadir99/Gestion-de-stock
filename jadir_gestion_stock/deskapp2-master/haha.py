# Définition de la classe Pile
class Pile:
    def __init__(self):
        self.items = []

    def est_vide(self):
        return self.items == []

    def empiler(self, item):
        self.items.append(item)

    def depiler(self):
        return self.items.pop()

    def taille_pile(self):
        return len(self.items)

# Fonction pour vérifier si un caractère est un opérateur
def est_operateur(caractere):
    operateurs = "+-*/^"
    if caractere in operateurs:
        return True
    else:
        return False

# Fonction pour effectuer le calcul entre deux opérandes et un opérateur
def calculer(operande1, operande2, operateur):
    if operateur == "+":
        return operande1 + operande2
    elif operateur == "-":
        return operande1 - operande2
    elif operateur == "*":
        return operande1 * operande2
    elif operateur == "/":
        return operande1 / operande2
    elif operateur == "^":
        return operande1 ** operande2

# Fonction principale pour traduire une formule infixe en postfixe
def infixe_vers_postfixe(formule_infixe):
    pile = Pile()
    formule_postfixe = ""
    prio_operateurs = {"^": 3, "*": 2, "/": 2, "+": 1, "-": 1}

    for caractere in formule_infixe:
        # Si c'est un espace, on ignore
        if caractere == " ":
            continue

        # Si c'est un opérande, on l'ajoute directement à la formule postfixe
        if caractere.isdigit():
            formule_postfixe += caractere

        # Si c'est un opérateur
        elif est_operateur(caractere):
            while (not pile.est_vide()) and (prio_operateurs[pile.items[-1]] >= prio_operateurs[caractere]):
                formule_postfixe += pile.depiler()
            pile.empiler(caractere)

        # Si c'est un parenthèse ouvrante, on l'empile
        elif caractere == "(":
            pile.empiler(caractere)

        # Si c'est un parenthèse fermante, on dépile tous les opérateurs jusqu'à trouver la parenthèse ouvrante correspondante
        elif caractere == ")":
            trouve = False
            
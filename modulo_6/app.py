import yaml

if __name__ == '__main__':

    stream = open("test.yaml", "r") #pegando um arquivo
    dictionary = yaml.safe_load(stream) # transformando ele em um dicionario com a função yaml

    for key, value in dictionary.items():
        print(key + " : " + str(value)) #impressão da chave 
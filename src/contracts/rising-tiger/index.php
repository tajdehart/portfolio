<?php /* ##########################
[client_email]
[dev_email]
data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAuAAAADmCAYAAACUGDA9AAAgAElEQVR4Xu2dC5Bk11nfz+3RrmQjxyM/iM1D2gVRBmPkHV6BCop3SSU4McbaqhAXkSveQTM9O3aBtSQGQWJLgkqBCipaYfBMz6zYcTDE4VFaB1cKhwKtsag4hNhjTBkomXjEwzYva2TZ1mN3+uY79/Tte24/pm9338e59/xuub2j7nPP4/ed2/2/3/3OdwLFAQEIQAACEIAABCAAAQiURiAorSUaggAEIAABCEAAAhCAAAQUApxJAAEIQAACEIAABCAAgRIJIMBLhE1TEIAABCAAAQhAAAIQQIAzByAAAQhAAAIQgAAEIFAiAQR4ibBpCgIQgAAEIAABCEAAAghw5gAEIAABCEAAAhCAAARKJIAALxE2TUEAAhCAAAQgAAEIQAABzhyAAAQgAAEIQAACEIBAiQQQ4CXCpikIQAACEIAABCAAAQggwJkDEIAABCAAAQhAAAIQKJEAArxE2DQFAQhAAAIQgAAEIAABBDhzAAIQgAAEIAABCEAAAiUSQICXCJumIAABCEAAAhCAAAQggABnDkAAAhCAAAQgAAEIQKBEAgjwEmHTFAQgAAEIQAACEIAABBDgzAEIQAACEIAABCAAAQiUSAABXiJsmoIABCAAAQhAAAIQgAACnDkAAQhAAAIQgAAEIACBEgkgwEuETVMQgAAEIAABCEAAAhBAgDMHIAABCEAAAmUROLtxrN/U5vpeWc3SDgQg4BYBBLhb9qA3EIAABCDQBAJaaIfBm+X1bTKc6+X1dfK6dsTQQnnvi/L6LRUE+yoM95XqPqFUa1fO3VPb7d0m4GAMEIBAmgACnBkBAQhAAAIQyIPAmYuL6pqnT6hW636p7kQeVfbq2JN/RYh3P6q66rK6sH45x7qpCgIQqIAAArwC6DQJAQhAAAINI7CycXJYeOufWO3gLuT4U/GWPy71d6SJPUR5IYypFAKFEUCAF4aWiiEAAQhAoPEEVrZvUa3usozzjLwWe+OVMBIRxUq81WG4ICL5w0oFXyEhJrfKe1fk37+V9xdFOL9IBepL5D0dmvLyHFhJCEuwqwIdxqLbzxjKoj33R56+TbUWXiUe9mPR+WH3vWp7fSeHPlEFBCAwggACnGkBAQhAAAIQmIVAu3ObCOv/JgL7aP/0MLgsf5+bKXZbx41f1QK499KVBgs3RaI4+jvU/2qRHwv9WXotwlzCWbqtT6vg4KjcDHyT/Hdc72B9uuwluVF4joj5lyi1cM9M45qll5wDgYYTQIA33MAMDwIQgAAEciagPcZHn70otYoA7x+flL9+SG2tXcq5tdHVRfHmV79BBVe/WgWtV4rn+0RPoGsxneHQoTFDEiD23I8W5EH4edU5+7wMlVMEAhCYQAABzhSBAAQgAAEIZCVgYr0fkuKJFzoM71PdazbUgyuPZa2m0HLak95tnZAwksXIm65azxdP9+KAJ70n1INHxIP/6yLgL6e82+3OndLHt8grLehDCbchNKVQ81G5HwQQ4H7YmVFCAAIQgMC8BIwovdsS33uqK4K0rllJtBd9Z1l7vccfWsw/s/AKdST8jV6hffHy3zAvSs6HgO8EEOC+zwDGDwEIQAACkwkY8a3TC8bHJfXs0eWJAnZyzfUosbZ1URaOnok6ixe8Hjajl04TQIA7bR46BwEIQAAClRMYEt/de9XW+j2V96vMDpiwFh3nro99yfyypNjJs0wL0FbDCCDAG2ZQhgMBCEAAAjkSWN04I4sctee7F/PtofiOcdpecKXOSyjKuRxJUxUEvCKAAPfK3AwWAhCAAAQyE1jd0plFHk7Et+ei02R/kc1/el5wYsEzTyUKQmCQAAKcOQEBCEAAAhAYJGBCLrT4Ptb7CI+vBkEsONcKBHIhgADPBSOVQAACEIBAYwgYT++jMp4X9cbk14LLwwzZ3rhH0hrqTDByeByO05jJzkCqIoAAr4o87UIAAhCAgHsEBjfZCYN9deXIcW+ynUyyiC3Ag2BHddrLk07hcwhAYJgAApxZAQEIQAACEIgJtDt6waVOOaiPJ9WV4N+oi+33AahHAAHOVIBALgQQ4LlgpBIIQAACEKg9geFc36dL21q+LvDSNyjExdfFbvTTOQIIcOdMQocgAAEIQKB0AmQ8yYY8lYqQGPBs0CgFgWECCHBmBQQgAAEIQGB162FJOXiyB2JXdrk8Rdz3iGmR5oQHnCsHAjMSQIDPCI7TIAABCECgIQTandtkJA/1R9PtnlIX1i83ZHT5DmNt84sqDJ7Tq/SchOicz7cBaoOAHwQQ4H7YmVFCAAIQgMA4Anh1s80NnSHm2mf+XgR4KzohDO9T22fvynYypSAAAZsAApz5AAEIQAAC+RPQMdULB/tRxZvre/k3kFONKxsnVSvacEcf+6rVXXK6vzkNe6Zq0jthigDvLqvt9Z2Z6uIkCHhOAAHu+QRg+BCAAARyI3DHhZvUwhXJC916ndR5wqr3i/L3n6pu94ecC+1od3ToiQ5BUYq81odPBbM76CetQmSJye3ioSLfCCDAfbM444VA3gTMj7IWW8fk9Sp5vYvUbXlDdrw+4xn9Tenlt2oZm6G352WR472VL3I0/daCcjHqM7Hfh5vOZIr5SL8QHvAMU50iEBhNIMsXJewgkJ3AyvbrVXB1XQWt/yUi7Eezn0hJ5wlosXLN0/IDLEJbv4yXU4tuI17043ul9uSx9AM8lnbemvl10Iiyi1Kh7fHOUv8TMo9+WHXWtrIULqRMalt1tSvfWUuFtNOUSgcFuFJ4wJtiW8ZROgEEeOnIG95gu/MpGeFL5RVKLOVXEUtZQ3troX3kiojsUItr/dJe7fjvWGzvRmJbdT+quuqyChb0dt17lXs0bdzcDBY/+czGNXfLK54XvTZDCTkJ/oN4lHclvnpRbsrOyk35UfnwhiGhHgaXJVZ8uZLvinbnSenP9VGn8eZOni/peHmeGEwmRgkIjCWAAGdy5EugvfWo/JLd3KuUHLH50s2vNltkh93FyKMdLrxKRLcWUlpsx4JKPNrBnryvBfdj8vdl54T2OCr2zeDWmsnawJEfgdSGLKlqH1EHC29QD648NrKxyIuq3iHfE9+R/rzkTV0G45kPFo6N7XN+1OpdEwK83vaj904RQIA7ZY4GdCa9Sn5fHulqjxdH2QS0Ha57ejGKzY4Ftmq9UgS0iO2+ZzvulQkdSV71EtrjBfjfy0cviD5+9ugNTnnny54PebVnru+TUt33y+u1A9Xuy1w7lzn8qL35cypsvVbm441WPbsyRyWzRlvf8BV79HN/h3Iv0PqUtPnlxTbYgNoHBXgYLJViqwagYwgQGCSAAGdO5E/A9ozxWDd/vnGNo0NF9NMH/Uj9mNWwFtf7kuFBxE2oxbYI7K78u7BbG2/2LBTbHb24znDYWvP3u07PE32kw4r0OzdJDMETBm1Li2dJwRf8jQhgHSpiH/J0RH2teK2Py5uyyFJu4uSNgUPPq+WZFt+aMJb7B+or/ulZu6Pb1G3LcOTJznb71CzTzKtzBjcsanWPVxI65BV0BttUAv7+KDXVoi6MK/0lfUl+lE+70K1a9SH2YF/tLXg0ix6fL0JBL3jTgspe8GZ7sD8rn30sir11MS67TCM0VYCPCh/ScyMQYdzV8yUKAXuRvJ6W10Bs9mEG0KJ6xp+EMHiDCNhfmsu8tiA2Fck8br1ZXVj94Fz1jjvZnh9KFS/4CxlEyZWubpyRWH694NYcCPCSDUBzTSIw47dtkxB4MJZYzNlDPVhY7G+Sod/X/x0f4cFitHCqqz1i8q8+9N/RF27vfS3uDttko92JXWSEocRcbU+kfk+HgkThIRFj8UbqOOx+iIh+zxZP4qEUD3agPdiy8FG19KP6vcgGLm9yUuXl1e483mNYnzlohw4Z7/1NkbAOw/iGS793mKjW1+lfyOvTcp5eEG0O8+RDHzouey95vzf/gkDCk8JXyPsvl9dzh82mfyqiS7orr+F4+rzyZ5ssGzovtx5nfJwXofdArvOcfNbDJs7yzuDTCgR4FmqUgcBIAgjwuk+M+AdbC+hBQWe8pfqH7CvkpW29UOBwzY+6WbAnYlH9Y/n3xfLfOr7yn6hrrmpR4PaOeFngxCJax1cPMRcxEx3ijUzEdCyWtB1GCadYGGl+wi4QdnGYiDwW14dr2UWycHKhjMs3ganwoa7E6UcLYOM5ktVrHd+U6XjpD0TXXlFzRQvj8OCH5Qb8+yzT/o38/aX9/85TjLU775R6183XVj/cJb/c4YPp9PLsuwtzv6g+pNM2+h3aVRRj6vWGAALcVVNrD00s8Ewf9Y+z8YaZx8z6R1q/p4+sP9hVjtZ+vh2LTt0f87cR7uLpEwEaeXlHHEacyo1G71+7iPYc6yOpI2ai/9X12Yziv0e3Y8ran31e/juOqx6sK+6Ffj9+6ff2TH9sQS1PEQKJtdVPE+InCE9ft8/iwAKm5eCW2VXHgPcXL4rYHs6fPgmAnld6Pl2W12NReNHV63ZLnTfGY6w3YImvnT35fjopT2DMPDdzfUd12suTBpP589Wt2+V6/rmBa1efPn+4yOBiQgR4NrOkw4T2JLxQrwvggAAEZiCAAJ8B2tynjI7htDNU6B+5OojqcSi0YNCPqf9BVCDUj8PVM/JXLF5tcTw3zgkVxEI6LfpHCf1YLJtH/lK+v0DtK6WNj5mFi9F45GahF4KDgC7afrPXn3jAy/XUJdf3SRGlOrRDRHfmTWoSr3aoQ40cWSibFl66j6ei7BfpVIT7km3meK43Bkb465AUzdA+psu4MjiLBm/QEODZrrN2R9viNvM9yMLVbNAoBYHRBBDgZcyMZEOQF0pzV+V1TF5lCWwRjeHnxD31AvnC/CPxKF3X8zKb9rUQ1UcUNhLFH/f+u++51Z/quFG9UYUOLdkz5UWA6kPHII8SoamFmIfk97VDOmJb6IWHWQ7dBx2vHoth/cRAP4LXx87yOO92lpop0wQCtgAvMg1hvENoS6d8DF4n15AWi1mu77Rn29Uc6/r7q3WwIxf9db1pcU48n+ejvweFrFLJZ3nOIVv4peudLW3hYL/Zgj6btVa3Hpb5fbJXeP4nEdlapRQEGkkAAV6GWZMNQbK2Fv8w6/ImLlgffa9sL2WYXrw3jSjO2noe5fo/cFHkyR/JD/Y35FEtdUAgMwFbgOfp4ewLbiVCpPU66c+xzII7Wkh7IPHaC5cKi9fODChjwXbnQ1LyH40VXWkveHFZjwbjj9Pdn04MDuWz7n6f5C9/T0Yi/hazM8eQYtbfecDIcyGAAM8F44RK0rtD9sS0/BC3RFyHB5KTWf/bC2soahFVGeMcbKPd+YK8pTMqHIgAv6aKLtCmxwRsAT6LhzMW2joFpEkDqUXoN8nrSEbBvSflduWlF0jWZwdRe8rYQjUIP6Oeufbrhp4upTNjFJtxxiyefHgMf/3dmi0X+WA2j1nmh2+X1mDmmDxvan1jyXghIAQQ4GVNg5V33im/2/9XXb3mY96ER7Q7/0fwfnOEuMgQgLJsSDv1ITAoFqbZsU+LzoWFN8oTJx3rmiWUJOYi3u1os6P3Stq83VzT5lVFPh36cXrkRjuDGUWKXvA6Pi48pjTZGz4Y0jLN/KjKFlW3m35qUOyNVtVjpX0IlEAAAV4CZG+baHd01gSzeAoB7u00qGTgUQjUM5IHvPcVl+VxuT7n2iv3i4A+k6HP6RSATRHc9sDTgmtXxPfSSC6D8dRlXevj48J1Nw+PDU9vwqP3OTilLqxfzmB3f4uknxoUF2rkL2FG7hkBBLhnBi91uPaCHTxMpaL3vrGV7VvECy1ZRHpHGL5DbZ/9wbFcTNrPi9YCs1FF9UZIfy3l/pMXT7KyeL9jSkXF20+ayIfHheuzRy8KHRTgSo327k9q36fPp5kPPnFhrBCYkQACfEZwnJaBgP2FTbxgBmAUyY3AoFc2DH5M0ub95Mj6R+++GBfV6SgfiBZN6rR7vhyG3ydluDoEZ7z3OxHgkmkpfF70xKHsa9146nV6vHHhQsPe2mEBXkz2libNF5tZ2TZuEkfGAoEeAQQ4U6E4AumcsUteCZjiqFJzFgLD6fFGxwUvb3y3Ohr8miySvHaoWr1wcuFguRGx3FmY2WVSaUQzbHyzuvV4b3OwUJ4QHFcPrpjUpWUdxt56ceZgvvDkRirOXa7fscPjohKHpEotawwut2NfT+T/dtlS9K1GBBDgNTJW7bpqpycjBKV25qt9h+2wiHG7J7Y7fyjjHJUiM79tz+sIMh3vOzk8o915nwzzNUbLVhhPnd4waAT5ntBO57POfxfPOtr8sD5n3dehaeNmPBAokAACvEC43ldtC/Aqf5S9N4SnANodWYTZC0sYt016u/MJKfPVfUJB2BVv+L/rbzTjKbrUDpdZrt208K02nGMwx/egDQP9xCP8S3lbMlP1DxYVHirAN+6R2KK7oyKEn/j6rcC4cyaAAM8ZKNVZBOwf5Sw/4sCDQJ4E0mEGowXW6tZjEjpxo9Xs/xbx/W15dqOWdbU7vyMx3aeimO4sT6/SISvVi9nDQ1IOxCbvGBDgnxG7v7SWtiqj00k44eT1AGX0hzYg0AACCPAGGNHZIaR3yJv8GNvZgdCxWhJIhxkMC4fB/NVmkMxTTaHd+bT8/0vkFUoK0RdM3LsgHXO/J2L2uBNzZlyWlG737bJw88eTPgbPqq328DoAJwbhQCf6CzCJlXfAGnShIQQQ4A0xpJPDsH/8suRhdnIQdKq2BNICfFgUjgpVKHoTmTrANGJ6T7r6fHk9KWL6H0zsdlqAu7VJi7nR+qCM4XozjlAc+y3t4f9W+bP3nrxdVv7yiTAdK2BvakX4iWPGoTt1JoAAr7P1XO+7HYKCAHfdWs3rX/oJzLAoHM6UIpqsu6y213eaB2OKEc0aTmLH3Lt4I6N3I24t3N8jEUpozTeKMNebhZmDMLnRk2R163bh9G65a/msPCV44RQziaIQgMAhBBDgTI/iCOABL44tNU8mMJgRY5QobG+9V1T391iVPSIe31snV97gEumwjewLKpOsM+6EoAyaqb31qNj7ZhGUT6nO2eeq9FOS7GNtsPmHhhYzCsP7ZDOru3waOmOFQJEEEOBF0vW97ll/yH3nxvjzITAY/zsqxGBlY0digd9oNcgis1l2PLTDFLJs3JOPhWerRXvCw6MPRbnKVzfOSDjKxV5F7t44zDbS+c9K1knsS/aTJS9z4s9PkRogMJIAApyJURyBdC5hvEvFkabmUQTSoRSjY3zTc1TX8gviAb/Da6Cz7HiYjqevPgvKNAZM74qJ/W12yU1svWw6jf0pC4GKCCDAKwLvRbN4wL0ws7ODHN6Ofng31rQHVA/lf4oA/y5nx1RGx+xY7qwLE9McR+86WkbfZ2kjfaMWiv1bs1TTyHOSmxOyAzXSwAyqSgII8CrpN73t1I8y6auabm4nx2fvhjlqkd3K9i3yaP2jVt/JA257hLMK8Gl3znRtsrQ7j0mXbuzHhrvWvyr6k9yY7EmGmKWJqSir6CNtQqDGBBDgNTae811n+2LnTdT4Dtqb8YzKcBJ5yZ+RHTP1V6Gkp1PBE+IBXWw8l8MGaC9MzLIJj64rWszalcWsGTfucRGwHRvuYv/K7lN/LQDOk7LR054fBBDgfti5mlHW+bF0NcRoNW8C6VSEo9chpDNhsNX2LNvKxx5kfRfT6n4Vi/Xynsgl12fCtz4prS6SnrFk9jTnDQEEuDemrmCgCPAKoNNkikCWdQjDceAfEC/4SW9JzvLkqt3ZF156455PCLuv8ZZdUwaehBSRFagpNmUczhFAgDtnkgZ1KJ0ZoV4LsxpkBq+HYs/BINhRnfbyEI/hDXm+IF7cV3jrxU3zmJz9IklVp9FynTfhgus/FSL8pAnmZAxuEkCAu2mXZvQqi/hpxkgZhasEsorJ1c1flXzQ/8rEgUeH32kz48WrQfhx2bDm6w81b90XYLo6d6vql33NsPV8VVagXQ8IIMA9MHJlQ7Q9Y+O8j5V1joa9IbC6JRkuwhtlgeAjars9epfL9EYyGo3fm7K0Y2bqQEJKrpkgwB+Sz2+LyiDY6n9ZJTdUk59+1H+0jAAClRFAgFeG3oOG04+m+TL3wORODjHJhPJ3IiZfPLaP6Q1Z/BaTq1vvlpR8t/dYjc8BbS/Wc30HTCcnp4OdIvuJg0ahS00kgABvolVdGRMC3BVLJP2IbHIg3sqWXlx1yb0OFtCjZCHm4SkG09k/xGnefUBtr99ZQI/cr9J+InDY06v0JjbEf7tv2cN7SPhJ3S1I/2tEAAFeI2PVrqvpx/p4wF0wYN+7pfZFgN/gQpcK74MtEg/bWOaOCzephYO9fn/C7ntFgJvQCh+P5InA+LmSzjLDbol1nydkP6m7Bel/jQggwGtkrNp11RbgYXBZ4m9P1W4MTetwkhfbn/Ri9jwctRumbePVzt/KXjIvihZjhq03yJz9paZNgczjsRdXjtrESFdk51DPumtm5g5QsHQChJ+UjpwG/SWAAPfX9sWPPO0B90fwFU92vhZ0dpqr1+16s7W0/Vh9nJCMiUY7Ooayo2N0+O3RnZRBZtLn881Szi6bgB3Pz2LasunTnocEEOAeGr20ISPAS0NNQxMItDuy3bzs6qcm5DVudz4l5V4a1YYISXu4B3nMsmEPE9VdAok9cZa4ayV61iACCPAGGdPJocT5hMmQ4KR5vOlUkgnl8LUI7a1HxQN+s2QAeUryXz/XGz7jBpreJTSdGz1ZTyDIgiUJ19n1nledARB+Umfr0fcaEkCA19BotepyIsD9zqtcK6M1sLNJhpPJ3r2Vd96pwqMPqQdXJH+450c6zWB6MWaySHMyU88xOj98wk+cNxEdbB4BBHjzbOrWiBIB7k/WDbcsQG80gSRbB/Nw2hlhp2eMY+gJP5mWotvl2XzHbfvQu0YSQIA30qwODQoB7pAxPO5K1lSEHiMaO/T0YktzA2OLcmLl6z9rkmw2fi88rr8lGUGNCCDAa2SsWna1v/jNo7zTtTRUwzttbwpFvPL0xk7n+96QCr5PXrKoVZHff3qabp2RXBv76tmjx73JjuSWFeiNhwQQ4B4avdQhJwJcieeM+VYqfBrrE0h7cdOLCcE0mYDh9xEpeGygMB7TyfTcLtG/uZqQIcjtUdA7CNSOAIKodiarWYeThVoI8JqZrnHd7c9FhMZMttX541uth/vnhsGfqytHXonHdCaabpyU3FgtStrNJbW5vudGx+gFBJpPAAHefBtXO8Ik/ZuSx5s38GNdrTm8bj2JcyVsYtaJsLr1bknReHvvdDIbzcrRlfOStRFcE67YhH54QwAB7o2pKxqo7QFHgFdkBJqNCCQLB8mEMuuUiBgGd0ri77gGwnlmZenCefFNabd7Sl1Yv+xCl+gDBHwhgAD3xdJVjRMBXhV52h0kYGdCYT3C9PPDzhUdhJ+RzXdeElXCotbpWbpwBt5vF6xAHzwmgAD32PilDD157E8ISinAaWQsAXshJqJx+oli51I/WDihFg70zpc6E8qTEj98C/HD0yOt9Ix450u835Wagcb9JYAA99f25YzcjgEnX3A5zGllPIEkKw+hE9PMk1QWlN4i1rMbx8T7/XF5PUeq+oRkOfqaaaqkbIUE4tSDYXBZbbdPVdgTmoaAtwQQ4N6avqSB2x5wvI4lQaeZsQT685FMKFPNkiRcYU8WUy/1F1OvbL9evN/v6dXFlvRTQa2w8NrWRRWGZxTe7wqNQNO+E0CA+z4Dih6/LcDxgBdNm/onEUgWYpL1YRIr+/N250/kP1+m1Igbl9WNMypoXUSETwO0wrLG+63TSV6WpxanK+wJTUPAawIIcK/NX8Lg4zhD3RQe8BKA08ShBBJPLplQsk6V1a3bRbC9W4p/TrzfN41MJZoW4dzcZGVbRbn4JhTvdxX0aRMCfQIIcCZDsQQIQSmWL7VPR8BeiElazGzs4ms4DH5M4oV/cuxJcViDKXBevKvnsjVAqdIImLj9R5Vq/a7qtP9pae3SEAQgMEQAAc6kKJaA/aOMx6VY1tSejUC8EJMnMpN5jYv9Hndm6olXd1ltr+9MboQSpRGIM9nwXVwachqCwDgCCHDmRrEEbAGO4CmWNbVnI5DEgZMJZRKxvvd7CjGdeuo1xXmT+sLn8xMw+zLo8Kul+SujBghAYB4CCPB56HHuZAKJ2JH1W+y2NhkYJQon0O7oMIq7ZEdHydrRRoiM92bfJh89JK905pNJBjJhPnqR34moKNf9JGLlfN5/mkEGoHKA0woEDieAAGeGFEsgHRd6Wjwvl4ptkNohMIGAjoPttrQnkLR5h6Gaxfsd1zcownn6Vf1lacKDTkrayCU2TareHPQAAghw5kCxBPCAF8uX2qcnYC/EZEv60fymjf0eVYu50fmIfKR3y9yXxX+nZBGn3j2To2wCiS1IPVg2e9qDwBgCCHCmRrEEbAGuFB7wYmlTe1YCsXeX8IjRxObxfts1xjsumvcQ4VnnZ97l4sWXfAfnTZb6IDAzAQT4zOg4MROB5ItfF0eAZ4JGocIJsBBzPOI8vN+I8MKn8FQNmMWXSkIAj091HoUhAIHCCCDAC0NLxREB2wMekhGBWeEIgURksmnMoEmSLCb5ZYnBE17dxGfxZXXsaRkChxBAgDM9iiWAB7xYvtQ+G4EkDpwdMW2CeXu/hz3hOjuKiQnvdk+rC+uXZzMgZ2UmEOdmb3WPs/gyMzUKQqBwAgjwwhF73oAtwPGAez4ZHBu+eSx/TLJCIExi0xTh/bbNPpgdRan8vOyOTS8numN463nO4ksnDEInIJAQQIAzG4ol0O7cKQ3cHzWCAC+WNbVPR4A48DSvIr3fwyL8oryl84zLQV7q6SbuFKWT71/W30yBjaIQKIMAArwMyj63sbpxRgUt/WOLAHdxHmgP2ZGnXy02erl078Ne5WmPxUkQ7KhOe9lF85Tap6K934ODST0dCy6rK0dOq53l/aGai30AACAASURBVFLH3PTGjE1PqGePHodt043N+OpGAAFeN4vVrb+2B7yOj5v14rEweJ5SVxdUq6VjV/XOfvvqQF2vFtTn1TWyS+Dm+l7dzKJWtl+vgoM7VRDo3Qqvs/p/XkT4udqNZ5YOJwsDiQMvy/s9aKeVDdkYpqU3iNHX1p5ca6fJFT7LZB5xTjK//bmmc0JHNRAogwACvAzKPrdR1xCUle1bJTZ4W0z3sozmuyLl/kpeuxJq8161vb6T8bxqirU7n5KGXzrUeBB+Tjxmr6zlTcUsJNudMDrN3pDHCJe75d13efNEoGzvt22r6CnMlYeE+cno7TB8q9o++zOzmJNzLALxEwZ2IWVaQMBJAghwJ83SoE7VMQTFLFz6C7HC9WlL6MvF6LXRh/4sdUlV73kyHsa3RP3tdh/oZ51obz0qY7l55Dh8CsmIF2LaG/KsbV0UEXhG2Ox5kTc5uUb3JFRhqbJQhSQkRV9I7xX2pxv0TVjuUMx3mN6FVD/dWSq3cVqDAASyEECAZ6FEmdkJ2AK8LiEoq5tvktCMn08GHQvvIYHdE+QTL6Ofkh/BH50d4gxnJsK7t9AtqiMdarHyzjtVa0F77X9lqAVfMoOMWoiZCPC0Z3wGMzh/SjorSfUL9fSTpyB8j7y+TNjtylOo0948jclzspD7O0+a1AWBQghMVA6FtEql/hBIYkv1mOuRcizOmxtbKVBd+fOL4vzW6bz+TOJUF0UgfI14kJ9U4cIfqaD7rfL+jROMeknExLnCxYQW3sHCL0r/vmJEf0bHOg+O15xYD1vNeyWN2pAnEeDNjw1PvM7ubEg0GJLCDrrTz3JzTZ9k8eX06DgDAmURQICXRdrXduoYghKHJcQ2C4M3yMKwX5poQi3mguB1vfCFccV/Qrzhbx/6MFrsebA418YkRkz9e6n7S0aK71BuAEbFpieb0lineZIa7uzGMdVt6RurRGwnNyTNFuBm7DpMYVFuKpecW/xo76JLqsKJXz/9AuT+zs6KkhCokAACvEL4XjRdTw94OtDbjg/OYrRoEZ/61bEx1ir8sMSKv1uE+r9WYesvVSt8tVSbxJt3u+8SIX4mS1NRGfOD+9vy1zeOFt7Brlo4WD7U+54SO1JLGN4nC+HuytyHuha0bz6ePXpDFP/siwBPbF79WoVx8yd1A0+qwkyXGbm/M2GiEASqJoAAr9oCTW/fFuB12YgnyQhhrDNLVobhHf9GWDrW+XIZDoaXh+E7RAD/4MTpYdr5r1JOi/jeEVV2INlY3qfUwj2ZPJt3dFYkraLO+mKOIHy/6py16pzYk/oWiJ94xF5gOyTHzo5S3xEO9zxJ/6ecD1MwWWniLexJVThpHprvr2NeLCCexILPIeAwAQS4w8ZpRNfq6AG/Y/On1ELwIxb/X5AfsztmsofxRuksJMfS+niwtqEMK09Lm885tE0jvq0dBfulPy7x5q+ZKt58OAzlY9L+LTONuW4nDS7ETG7AmhuCEo+xLjfFxIVnu6r6ub89CSHLRoVSEHCSAALcSbM0qFO1FOAXbpKQjT3LCk+IGDWb8MxyGHH7e3Lqy8XTHUp4il7UuZCqSr8Xqlb/vSD8vHigZQOgMYddpy4Se9CD4PfVM0e+a6ZUcoOx73FIxixjrtM5gzti2k9AmugBT0IU3Fl4mXW+pEOl3A2dyTqevMuR+ztvotQHgcIIIMALQ0vFEQHzqFs/Pq7XVvR2Kro8+m44/KJUNZid5Bl5T6co1FlUtLc8OcaJP3NT81/kNSjQL0k4wfJM4lu3am8NnseY63IJxHM0lBjj7fYpKwa8eWkIkwV6cj0GpzKFJ7lmx3RqU1IV2vYxN9Hk/nZtztIfCIwggABnWhRLoI4x4JpI+kdev7MvYR1LU4V16LOiR+dP76ig9boh0Frw6XR/2+3dIfGrCw96oI140js0poW6qXj2MJm4Y+mnFfpdPzyMSfiNCTlpsgc8ubGsd5pJE2qhU+0di6ZvXUJpivy2Jfd3kXSpGwK5E0CA546UClME6uoB14Poh2T0V0j+nQi0F2e2sBn7T0v5bx44Z1/++14R2Dt9b/Ww+NUeyiQ13B0SFnPN1Q/Jey/p15VH2IndscE48NgjnHnANS4Y21pvQHSwcLG/LXqTQlDiOabteuXI6ZmflLhk5nRIynxPgFwa1yx9MTdXt83kKJilPc6BAATmIoAAnwsfJ08kUFcPuB6YffOQDHRXcie/UV1Y/cPoLe2J0x5sfWgBe83Vb1DB1S8Xj7dexHliiI8WP6NSAib5qJNT4t0oo8+CD0hqklGb/eTrpW53dF7ouN/NXYQ4aJjEM3xabnLe0jgBnmTlkbkku0teWL888dqtSwHztOp+6a5ep7Ev3vDR+e7rMp5Z+knu71mocQ4EKiWAAK8UvweN19kDrs2zvPXd6kj4Gxkspb3a+np6/rDo7n1yWGo/I7IlfrN/Se6Kt30pEvj6UXsoj9rTV+sTUus9UuZ8hr5lLzKYD7xJHuDDKPTj3yV7hGq9UorqOPvmxIDb49tavyf7hKhJSS1Ar71yf38TrCDYkcXI5xrh5c9igsTRcVq+Ey5lOYUyEIBAtQQQ4NXyb37rdfaAx9bpL9LrCemxVhtM5p0qeF5CTu4dKwhWtm+VR8e/a53xiHgq3yYhLDrOtZeBxQqFCYN/VsgCuiRDhumKP5lQtODWrLV4uVler2iMANfzdyH4LfHsf1bs+bJGi9K0N1yb8IdEkGrveLMPtp5vtn0ZXSMJIMAbaVaHBlV3D7gtwoOFd4k3elQYyDjgT4jo0SEdZqHlYUdqxz9dULzhQXh8xCm7IqJOFSai9A1TKEI0+mYQwd+SPmyu7zk0o4rpir0QU6m/64nwq8L6xYWxLmYkw7XG4TVXuq9VF9dlcyYPjnQWo10JS3lAba/vNHLkSfjJjtxsnGvkGBkUBBpIAAHeQKM6NaR0HHX9H4+ubv6yqNJvEXF8VDhrMf6svPTf5gjCp0R06+vq4/LvHROFd3yevfvieAMWn3JteEOeW+VH/RGn5lRRnWl3Hpeq9dOGPXkdi5qpewhOcv3VL+f3vHY2T5V+RaoxC5fHrb+Yt52qz4+fWnW7pxoV2181V9qHQMEEEOAFA/a++qZ4wCcZUsdq62OSp3tcPatbHxTx/h1jmykzc0W78wXpx3Ojvvj0o57cBD0pIzc51usegmNSKp6obc7vSdddls+Hd6PNd+Fylj4UWcbYeDFaM8IBAQjUhgACvDamqmlHm+YBL8oMq5s/q4LgB4aq18I7CB8odWFVekfM+j+1yGqzwQWodRfgyfqLZgnOrPYcLJde39CMbCn97ElsPT/rtOA8CFRFAAFeFXlf2kWAZ7P04CJMvRV9GLwt9ywnWXpjpyL0aYOTUbnY41SQWbi5VMZOOzjLBlIujSXPvjQtW0qc3aau8zRP21IXBGpGAAFeM4PVrru2APcpnGEWQxkP3TnxhP++pFBbrWzxn70TpO5P3qkOZ2FTxjnRrqXPPp5K92hvhlRGH/Jqo+/txTM6EumgN1wSjpb6lCkvO5trVefrP51XldQDAQiUQwABXg5nf1sxeax1JhB9+BPOUGeL+yrAtc3anb+W///SvvnqeNOYZMXYlxj2pcpu5Fy/Bkz4hk49GW88Va9QneS7le9V1+ca/YPACAIIcKZFsQQIQSmWbxG1p1K4eeZBbXf+uyB9ba0FeBzL7lP40DzXQX+ToqgS2elWdtKsw06hpt9vkZus49xkzTMBOBcC1RBAgFfD3Z9WbQ94Hb2J/lgqGWl6MWK9vILz2mt145Jsa/66fjV1E7Hmhld2Tg12JSPPqXlxeHN+vONsnH5S76TZaS87PX6zWFqnlyT3t9OGonMQGE0AAc7MKJYAMeDF8i2i9vQmJp4J8M2fkhj8H7Gw1isGPg4f4mZ3titjMBNOqDpqe+3sbJUVeFb8vYqdC4RM1RAolgACvFi+1J7KAx4szZwnG5LlEUiJEO9CUOIt6WPe9RHgycJCv26a8r4yjDf8olQbx4Z/TJ4o/FunvrvMNXqS3N95G5/6IFAeAQR4eaz9bAkBXj+7pz3g9RGgeZBe3TgjIShafPWOmtyAJAsv9eZBxATnMRfWNn9aqnmziO/n9KpzZ7GjCT/5RRHgb89jqNQBAQiUTwABXj5zv1pEgNfP3mkB7o7oKIPkUC7wmgjwxGZ+3TAVPSd0ppSDhYviET/Za6r6pwvxHCX3d9HWp34IFEoAAV4oXipX9iLMuuZU9s2MtgD3Lca0jgI86bNekEc+6CKu1/RN6a48ZThVWeaRdkenTjxG+EkRhqZOCJRHAAFeHms/W0KA18/u7c77lQr/udI70vjmZaubALdDT8LglFNxyvWb+Yf3OL15z56Eppwunbext+yr0H2X2lq/p2mIGQ8EfCKAAPfJ2lWMlRCUKqjP12a785hUcKO8QvH0vaAyT998o5jt7HTeeqnD8RAU4w3VC0cJPZnN4tOdZRwKD8tJi9GJZT8hIvxkOntRGgIOE0CAO2ycRnTNFjTPHr3BKzE3yYDam7WzvD+pWOmftzvvkzZfI68nRYDf6GQfi4IyJMDVB+RR/8mimpur3tgjW4ec1XMN1LGTB3fQLFOEE37i2GSgOxCYnQACfHZ2nJmFAAJ8NCXzKFl70nSqM7cWOtpb0W+t+fUdcceFm9TCwZ5ltL8RAf4Ps0z1UssYESihCIrt5ksF32ssff2W4wkn/KQKS9MmBAoj4NePa2EYqXgsAVuA+xZPPA6K+SHVqe506ICEWju26167o4WdvjHYF/F5g3ezu735pBjl+v64XbsJ0fPnyJWHepk53Lp5822y2NdK0TH4hJ/4NrsYb8MJIMAbbuDKh4cAHzbB4G57ZT7CzjIhElGhRID79x3R7jwumEyMrz5cu3Fsb9wjnbpbelZ9Srws86nJZdKe8H1ZmFncQljCT5o8kxibhwT8+3H10MiVDtkW4D6KuUH4dVjkZzb5OOavB7z/BMBYz6UbJDN/9MLLvUpT4VX6peJY44MivNVdUpvre7n2sp/tpvsA2U9yJUtlEKiMAAK8MvSeNIwATww9GDdqRNSSc4scEwG+Jx7w457M1GSYg08oguDXVKf9vZVzSObPsUI9rZUPtIYdSGLyF8U2n5L0hF+e6ygIP8kVJ5VBwAUCCHAXrNDkPiQCXC8W83uL7HQeYbc8q/YcTEIwdr3c7GNl+1YJO/ndPpKw+361vf7qyi/T5MaAlIOVG2NEB6IUhd3fk/UDz5VP/0CunW/JrZuEn+SGkoog4AoBBLgrlmhqP+yNeHwOQRn2fru7a6HvAtyes5IKXf53n9o+e1ell+jqxhkVtGRLdMcW7FYKxcHGV7ZfLzdv74l6FgaXxRN+au5eEn4yN0IqgICLBBDgLlqlSX2ydxb0WYDXxfut5167I6ozRwFRt/mcEuBR56v1OCe7XZJysA5zKb5Z0n3N44aJ8JM6WJ0+QmBqAgjwqZFxwlQEkhAUP+OJNax+/t5oYaM+3PV+m1hWvQgzPw/eVBPGgcI2g6g7Fe+GacIPTsprWcIaLjlAiC5MIpC+4Z7vBo7wk0m0+RwCtSSAAK+l2WrUaQS4eJT7aeOM4VzKqjE4ldLi090bhSIvAXPDpFMR9o4KBXjfm1phH4pk3eS617YuqjA8Ew0x7C7LOoKdqYebPP3YkZuvc1OfzwkQgICzBBDgzpqmIR1LBLifC/q0Gdudp+T/r4ssmscj6SKnhh1+4Xpfi+Rg26yqEBRzM/SnMsy/kgXM3+hctpwi+TelbluEz3LjnYTwseFSU+YE44BAjwACnKlQLAHfPeDpvN+hCKpXqQurHywW+hy1p+KfPfa6rm49LjtNxpvxzBdCMIs57JSD3db3OD1nZhmfT+fMs1tmHH7kewYpn+YLY/WGAALcG1NXNNDEg+OnBzwdfvKwPEb+zooska1Z+4Zh1sfm2Vpyu1S78wXpoE4nN3v4wKwj1OL72iv398IX8HzOytGV89JrQLKvhUnCTy7L98ZpV4ZDPyAAgXwIIMDz4Ugt4wj47gE3HqzbenjcF1N2Bgel3O9vUVdeu3NVql6Iqg/UmuqsbRXV1FC9/QV8Hj+BKA12SQ3Nsri5/93JPCjJSjQDgVIJIMBLxe1hY957wPvbuivJD3w89y2q855SdvaGOvQ37/HH9bU7j8qfN0sYylPqmWu/rLT4azvf9zNHzpXWblEcqTchYKdkzfJ0KX565vN1yPyBQIMJIMAbbFwnhhZ7cfLalMKJQU3RiWRbdyUL6W5wXlDZ27DXob9TmGLqoloMq4Vd2Uxld+pzZzkh2c58T+bKKefnyixj9P0ce1HmJGFtvjv2vdyN1vd5wvi9IIAA98LMFQ4SD/hfC/0vjSxQh42IEoGQPVa1wunVmKZTiy67p9WF9cuNGRsDSROIF2Ue5pRY2b5Vnpg9LCf+D/ne+B4QQgACzSOAAG+eTd0aUfxI3VcP+Frn07KV+Usio9TBo5zErPu5aLaqqyfh7m/cfVXsy243FQ8+Jj94HAqWJVSl7P7THgQgkAsBBHguGKlkLIE4BMXXnNKrW+LFCk/KQj69s+RSaeEMs07JJGTmPBt/zApxyvOSuHuYT4mutsWT7Ej74uleGlobEt+QTQpTqS0AOg4BCCDAmQPFEvDdA64FeCACXB+1EuBkXij2wujVbq6P+2WDpkuKRZelIHemkSQ/+PCOs8R/O2MmOgKBogggwIsiS72GgO8e8Hl3wit7HiUecEIhimZvNj3Scb4suiyatYv126EodsrPeDMsX58aumgr+gSBAgggwAuASpUWgXgRpq8/JnZWEdfzaqdzFbsfLlPnC82ILJ0jflGejJxyPjSpzqxd7nsSfvSkhKLcEoWiJO9xE+yy7egbBOYkgACfEyCnTyDQ7pyTEv9ZdvX7kNo+++3e8bJ3wnR9QZUtwIk9LW6q2hlPlFqWWPtLxTVGzc4TaHf+n/TxuLx+U+bCvxABbjbv4hp03nR0EALzEECAz0OPcycTsDcW6bSXJ5/QsBL25htKnZMf2PPOjjB+9G1yD9/gbD/r3DEjvi9GAsv1JyJ15lynvts3vt3WK0V4f0C6r9OALtVpGPQVAhCYjgACfDpelJ6WgO8ZHhJRq8kNL7aalmeR5ftbXytSEBbBOSW+WeRaBOLa1hl7vYPgd+Rp4Xcq1Zsf0TWpTkoq0z21vb5T2/HRcQhAYIgAApxJUSyBRIC77f0tioIRXY9H1bueCz0OF1LBn6ut9k1FIfGyXsS3l2bPPOj0jbro7+4pdY2I7m7rI1LHovn+GJMzPHMjFIQABFwigAB3yRpN7EscA+3zj8fa5p+I+H6ZLLp7SnXOPtdZMyc3Sxvy+PtNzvazbh1Lh52Q67tu9iurv+3O+6Sp18jrCbn+Fq3FmKYHrt/Al8WJdiDQEAII8IYY0tlhxGn4fBbg7c4nxD5fHdnI5d0w2Y0x/8tIi+8jVx4yueAJO8kfcINqbHd+XEbztp7YXpLQk7dIOMoZa4Q6Llwv1uSAAAQaQAAB3gAjOj0ERJ1S9mY8W2vuXnNxDnCyL+RzSenFdQcLF3sbMeH5zodqc2uJvydCGWIg6zD0QkyzWDc+/lIE+Fc2FwAjg4BfBNwVA37ZobmjRYAreZR8vxj4zsjIrnrAk0wMZEDJ42o0PPUmOzp+916ns9/kMV7qmI9Acv09IRU931QW/LHEnXxdv+Ig7EoI28J8DXE2BCDgCgEEuCuWaGo/Eu+vv5tK2LnAXfUuxxlQiDOd/0q0N9lBfM/P04ca4vUXesMyfZjQk8/L6/rU8F1+guaDnRgjBHIkgADPESZVjSDQ7uhV/CeiVf0X1i97ycjOBe4qB1sA+JivPa+JmWwvr2tkk528uDa9HvtJYdhdVEFL54ofOMLPqK2zL206CsYHAV8IIMB9sXRV44wFeBj4u7W5nYrQ1YV4iQDwM11kHteH3nSqFWxKtoqrUt0b2OEyD6ge1GG+H/5cRvq8aPfLp6/bN6lLTTC4dXxc5tTXe0CEIULACwIIcC/MXOEg44V9PgtwjT/mYHa4cy+TAaFC810k5gnC3VElB+qt6sG1C/NVyNneEFjdfJMKgp8Xrf0Z1VkzHu725h/LjdzXpvR32H2/bMbzam+4MFAINJwAArzhBq58eGTWMCZwfSEmdpr9UklsuysezNNqc31v9so40ysCxvv9SRnzosR936e2z94VjX9147yEobwlxSJQayLQt7ziw2Ah0GACCPAGG9eJobU7+jmqu9k/yoKUbPPu3o52yS58ZECZZj5o8XTtlft7C+YQ39Owo2zvxnzjHqVa+snJnmRIWlI7y/vRB3dcuEktHNg3crI77Rq70zJvINAgAgjwBhnTuaHYsc+s3tdecL0lvSywkkwHLi10TBaJ7sqP/JJz88jFDpm0cTq95G3RDoVXjpzuiycX+0uf3CNgvh/1IvVjI7eZb3e+IJ/FO+f6m0XKPcvRIwjkQgABngtGKhlJIMlti7DTgJKtpj8nQreX69eBuROnSXTtxsABNCO7YJ5m6CwVx+R1XjyX9yK+XTWWw/1Kbnz3ZQ4dH5pD5snUG2UEH2BBr8N2pGsQmJEAAnxGcJyWgUAc2kBuaQNrdfM/ivf7J6LMBt0Dd9IysllShsksRYzHUocLnOmdwAY72chRahSBZOEzu6QyQyDgIQEEuIdGL23IsYcHz6pBrgXckSsfFa/WjVHYwnb7VGm2OKyhODTG1U2CqoZkhLcW3XpR3DF56ThdcnxXbZc6tx/n3ddjcHVvgDrzpe8QqAEBBHgNjFTbLuq8yGZDCTw8sRHtbCguCN5kcaifCzC1uL7maXnUv7AvN0S7Q9faHZ0VtaDeLO+f6H12ScIFlgk5qe23UvUdT2U+cehGvHoy9AACXhFAgHtl7pIHm4hNNneJ0dsLU114MuD7DphJ+I22ULLQLQk3kfze+msy3JOFcvdKHuadkq8immsagSTrkHsZkZrGmvFAwGECCHCHjVP7rhFbPNqEa1sXe6nr9iVv9FKleaN934AnDr8xlvqsvB6V8KCnJExIe7wX5fWkvH4br3ftv43cGoC58VWyuPK8Wx2jNxCAQFkEEOBlkfaxnXgbehdCLVzib+cEr3Jr+sEtsH3cQCa5GRo1Q4j1dum6oS8QgAAEGkQAAd4gYzo3lNi7SA7wYdMkW9NX5wVf3bpdPL3vlhCLz6qt9gudmz9ldCi9mY5pMQweES6/Ll7vHWK9yzACbUAAAhDwjwAC3D+blzNicoAfzjnJASz6t6KNefqZGFq/rLZWby9nYjjcilk0/AkJC3jE4V7SNQhAAAIQaAABBHgDjOjkEPreVfVnImhudrKPVXcqDtExXtelkVk4iuxjEqPPItkiOVM3BCAAAQhAYIAAApwpUQyB2Lsahvep7bN3FdNIzWu1syEotSc3KsdLHVESBsM216WCpzEIQAACEPCdAALc9xlQ1PjJgJKNrJ0XvMx86XY6RBbJZrMVpSAAAQhAAAI5EUCA5wSSagYIxN5VxN3kqWGHopS1K16SiaV8z/tkIpSAAAQgAAEINJoAArzR5q1wcLEAJwPKZCPYaQmD8Kp65toXF559I9kK+5KEvpye3ElKQAACEIAABCCQFwEEeF4kqSchkMQ2413NOi9WN39WsqH8QG/XxeJFcRIidF4E+Lms3aQcBCAAAQhAAALzE0CAz8+QGgYJxB7dMLgsmT1OASgjgdWtxyT/9I1R6bC7XOi25yzAzGgUikEAAhCAAATyJ4AAz58pNZp8yhcry29dVwvYucH1GIqKn7ezrxTVRl1tQL8hAAEIQAACJRBAgJcA2bsmkvhiwhumNf7q1sPiBT/ZO62YEJ7EPrsSfrI0bRcpDwEIQAACEIDAfAQQ4PPx4+xRBJLUegjwaWdIsoNo78zuvWpr/Z5pqzm0PPHfueKkMghAAAIQgMC0BBDg0xKj/GQCscArOo55ck/qWWJt66IKwzP9zuedmpD473rOC3oNAQhAAAKNIYAAb4wpHRoIAm8+Y5hNcj4ilRzrVbSvnj16PJfUhMR/z2cbzoYABCAAAQjkQAABngNEqhggEAvwvD23PoEeXJCZV0YZ4r99mkWMFQIQgAAEHCWAAHfUMLXtlh3DTIaN+cyYxGrH9cwfU0/893w24WwIQAACEIBADgQQ4DlApAqLwPLWd6sj4W/IO8Vk8PAJ9nAoih79aclccmlmDIQHzYyOEyEAAQhAAAJ5EUCA50WSegyBdudB+f/vlx0dP6u22i8Ey5wE7JhtU9W+5AdfUpvre1PXTPz31Mg4AQIQgAAEIFAEAQR4EVR9rjOJMf6YeGpv8RlFbmOPNzZKKpzt6cLq5ttlc6R7uTnKzTJUBAEIQAACEJiJAAJ8JmycNJZAe+Me2cLxbpXXokFQGwKDqQnD4ENqu/3tU+GJN/kJw/vU9tm7pjqXwhCAAAQgAAEI5EYAAZ4bSiqKCCDAi5sI6V0yleQKf6sI6Z/J1KAdfhIGSyLedzOdRyEIQAACEIAABHIngADPHannFSae2ksSgnLacxr5Dl8vyrz2mc/I04Vr+xVnTfWY7E7K9vP5WoXaIAABCEAAAlMTQIBPjYwTDiWAAC92gqx12uL57kgcd9LOJBGeiiEvYGv7YkdM7RCAAAQgAIHGEUCAN86kFQ8oCZPAA16UKYbzg+uWzskTh/NDTa5t/ksVql8XwX6dfJbfjppFjY16IQABCEAAAh4QQIB7YORSh9hf6BdcljjjU6W27UtjJj/4J2W4iwNDTt/0mHIfljLHo3JB9wHVWb/TF0yMEwIQgAAEIOAqAQS4q5apa7/anY9I10/Ii1jjIm24snFStVoPDYnwMHhWtQ42VLggojt8rZbdUTfCYF91WyfUgyuPFdkt6oYABCAAAQhAYDIBBPhkRpSYhkASgrIvIRE3THMqZackYDKbXOzdl+yC5AAAAVZJREFU8Bxycqh1+OgQlSmbpDgEIAABCEAAAvMTQIDPz5AabALJIkw84GXNjMEc4YPthuGvSbrC7y2rO7QDAQhAAAIQgMDhBBDgzJB8CZzdOKa66oyEQFwi13S+aA+tbXXzTbLL5dsk1uQl/QwpejOkVvcPVOfsW0vsCU1BAAIQgAAEIDCBAAKcKQKBphFod26TmO89boCaZljGAwEIQAACTSGAAG+KJRkHBCAAAQhAAAIQgEAtCCDAa2EmOgkBCEAAAhCAAAQg0BQCCPCmWJJxQAACEIAABCAAAQjUggACvBZmopMQgAAEIAABCEAAAk0hgABviiUZBwQgAAEIQAACEIBALQggwGthJjoJAQhAAAIQgAAEINAUAgjwpliScUAAAhCAAAQgAAEI1IIAArwWZqKTEIAABCAAAQhAAAJNIYAAb4olGQcEIAABCEAAAhCAQC0I/H+Aq0degdsjzgAAAABJRU5ErkJggg==
67.176.92.82
August 12, 2024 at 12:32:41 PM MDT
360
[dev_name]
[client_name]
###################################

1. The 2nd and 3rd lines above are the emails read by this PHP script from itself (used below as $lines[1] and $lines[2] respectively). 

2. The 4th line ($lines[3] below) is the data for $DEV_SIGNATURE.

3. The $CLIENT_SIGNATURE is received by this script from itself when second person signs the contract.
*/

$phpName  = basename($_SERVER['PHP_SELF']) ? basename($_SERVER['PHP_SELF']) : 'index.php';
$fileName = substr($phpName , 0, -4);
$htmlName = $fileName.'.html';

// If the filename is (or starts with) "test" or "demo" the PHP file won't delete itself, nor will it redirect to the HTML contract (when one exists)
if ( substr($fileName,0,4) == 'test' || substr($fileName,0,4) == 'demo' ) { 
  $selfDelete = 0; 
}
else { 
  $selfDelete = 1; 
}

$lines = file(__FILE__);

$clientEmail   = format($lines[1]);
$devEmail      = format($lines[2]);
$DEV_SIGNATURE = format($lines[3]);
$devIP         = format($lines[4]);
$devTimestamp  = format($lines[5]);
$devTimeOffset = format($lines[6]);
$devName       = format($lines[7]);
$clientName    = format($lines[8]);

// Trim and ignore [placeholders]
function format($text) {
  $text = trim($text);
  $firstChar = substr($text, 0, 1);
  $lastChar = substr($text, -1, 1);
  if ($firstChar == '[' && $lastChar == ']')
    return '';
  else
    return $text;
}

// Gets the current file URL and replaces the .php extension with .html
function getHtmlUrl() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
  $url = substr($url,0,-4) . '.html';
  return $url;
}

/**
The HTML code (and some PHP) is kept in PHP variables like $CONTRACT_HTML, $FOOTER, $CONTRACT_SIGNED_PHP, and $CLIENT_DATE_IP_COMPILED.
**/

// This gets executed when Client signs; 
// the functions are used in $CLIENT_DATE_IP_PHP
$CONTRACT_SIGNED_PHP = '
  $phpName  = basename($_SERVER["PHP_SELF"]) ? basename($_SERVER["PHP_SELF"]) : "index.php";
  $fileName = substr($phpName , 0, -4);
  $htmlName = $fileName.".html";
  $pdfName = $fileName.".pdf";

  // Function to get the client IP address
  function get_client_ip_env() {
    $ipaddress = "";
    if (getenv("HTTP_CLIENT_IP"))
      $ipaddress = getenv("HTTP_CLIENT_IP");
    else if(getenv("HTTP_X_FORWARDED_FOR"))
      $ipaddress = getenv("HTTP_X_FORWARDED_FOR");
    else if(getenv("HTTP_X_FORWARDED"))
      $ipaddress = getenv("HTTP_X_FORWARDED");
    else if(getenv("HTTP_FORWARDED_FOR"))
      $ipaddress = getenv("HTTP_FORWARDED_FOR");
    else if(getenv("HTTP_FORWARDED"))
      $ipaddress = getenv("HTTP_FORWARDED");
    else if(getenv("REMOTE_ADDR"))
      $ipaddress = getenv("REMOTE_ADDR");
    else
      $ipaddress = "UNKNOWN";
    return $ipaddress;
  } 
  // Function to get the client date converted to the same GMT as the dev date
  function get_client_date($receivedOffset) {
      //$receivedOffset comes negative and in minutes, eg: -120 for GMT+2
      $offset = -1 * $receivedOffset / 60; // GMT offset
      $is_DST = FALSE; // observing daylight savings?
      $timezone_name = timezone_name_from_abbr("", $offset * 3600, $is_DST);
      date_default_timezone_set($timezone_name);

      return date("F j, Y") ." at ". date("g:i:s A") ." GMT" . sprintf("%+d", $offset);
  }
  ?>';


$CONTRACT_HTML='
  <h1>Contract for Design Service</h1><p>This contract is entered into by the client (you) and the contractor (me), undersigned. Under this contract I will work to create a product, according to a brief agreed upon by both parties (us).</p><p>This contract was written with the hope of being fair, succinct and legible. If anything here doesn\'t sit right with you, I am happy to work with you to change it.</p><h2>Project Brief</h2><p>Here is a <a href="https://docs.google.com/document/d/1ZeLFViOWOdX4BMl5-OSo7p-x50KRIZS44Oth8NyCbAg/edit?usp=sharing" rel="noopener noreferrer" target="_blank">link to the design brief</a> created during the discovery process. I\'ll lock this document at the same time you sign this contract.</p><h2>Project Schedule</h2><p>As part of the discovery process, I will create an estimated timeline. This is only an estimate, to which I will try my best to adhere. Here is a <a href="https://calendar.google.com/calendar/embed?src=c_d1f39e38c6edca27dcc9fc7c03a77d17884aa472ecf2df744fc83ca7628f62f8%40group.calendar.google.com&amp;ctz=America%2FDenver" rel="noopener noreferrer" target="_blank">link to the estimated timeline</a>.</p><h2>Pricing/Rates</h2><p>I will track my hours in the <a href="https://calendar.google.com/calendar/embed?src=c_d1f39e38c6edca27dcc9fc7c03a77d17884aa472ecf2df744fc83ca7628f62f8%40group.calendar.google.com&amp;ctz=America%2FDenver" rel="noopener noreferrer" target="_blank">same google calendar as the project timeline</a>. I charge <strong>$35 USD an hour.</strong></p><h2>Shared Drive</h2><p>I\'ll store the bulk of my work in a Google drive shared with you, so that you can access it at any time. Here is a <a href="https://drive.google.com/drive/folders/1rCb--0msTwpH6lxNVy-OBql6_bqfWDv5?usp=sharing" rel="noopener noreferrer" target="_blank">link to that shared drive</a>.</p><h2>Terms and Conditions</h2><h3>1. Hand-off</h3><h4>Approving the design:</h4><p>As the work nears completion, I\'ll ask for confirmation that you approve of the product. When you\'ve done this in writing, I\'ll note the date of approval.</p><h4>What if you want to request a change?</h4><p>I define a change as anything not covered in the brief. If you would like to request a change, please do so in writing. I will charge for additional work related to this change at the same hourly rate, and communicate the expected delay caused by these changes.</p><h4>I offer a 30 day warranty.</h4><p>If you feel my work is incomplete or needs improvement, please let me know. I\'ll happily resume work within 30 days of the date of approval. After 30 days, I\'ll ask that we sign a new contract to continue working together.</p><h3>2. Ownership</h3><h4>Who owns the final product?</h4><p>Before the date of approval, rights to all the work I have completed will belong to me. From that date onward, all those rights will belong to you.</p><h4>I can use this work in my portfolio.</h4><p>I reserve the right to display the work I have done for you on my personal portfolio and on my social media profiles, for the purpose of self-promotion.</p><h4>Who gets source files?</h4><p>On the due date, I\'ll upload my source files to the shared drive, as well as any fonts or images used in the work.</p><h4>If you give me sensitive information:</h4><p>I will not commercialize, disclose or leak any information given to me that you consider sensitive.</p><h3>3. Termination</h3><h4>What if you want to stop working together?</h4><p>You can terminate this contract without liability at any time, with a written notice. I will charge you for the hours that I have logged up until this point, and deliver any source files I have at that date.</p><h4>What if <em>I</em> want to stop working together?</h4><p>I can terminate this contract without liability, after I have given you written notice at least 30 days prior to the date of termination. I will refund you any fees paid to me for products not yet delivered to you, and deliver any source files I have at that date.</p><h3>4. Liability</h3><h4>What if I make a mistake?</h4><p>I\'ll do my best to work in a timely, professional manner. If you decide that I failed to do this, please let me know. I\'ll do my best to make it right with you.</p><h4>Disagreements we hopefully won\'t have:</h4><p>We agree to settle any disagreement amicably, as best we can, during the course of this contract. If either party feels they need to pursue legal action to protect their interests, they are free to do so.</p><h4>If you pursue legal action:</h4><p>If I\'ve made a mistake and you pursue legal action, my monetary liability is limited to the total hourly rates I have recorded up to the date that the legal action is initiated, regardless of how damages have been incurred.</p><h4>What if you don\'t pay?</h4><p>In the super unlikely event that you don\'t pay me for the work we agree on, I\'ll work with you to come to an agreement. If we haven\'t come to an agreement 90 days after the date of approval, I reserve the right to pursue payment through a debt collector.</p><h4>Weird things happen sometimes.</h4><p>Nobody is at fault for breaching this contract when the reason is beyond our control. This could include acts of government, natural catastrophe, major accidents, or alien invasion. If something like this happens, the reason and expected delay will be communicated by whichever of us is affected.</p><h3>5. Miscellaneous</h3><h4>What if you step down?</h4><p>This contract will apply to whomever you assign as your successor, heir, or executor.</p><h4>A single source of truth.</h4><p>This contract is the single legal agreement that we will enter into. This means all previous agreements are superseded by this document. This contract won\'t be modified without drafting another document, signed by both parties.</p>
';


$DEV_SIGNATURE = '<img id="dev_signature" src="' . $DEV_SIGNATURE . '" >';

$CLIENT_SIGNATURE = isset($_POST['client_signature']) ? $_POST['client_signature'] : null;
if (substr( $CLIENT_SIGNATURE, 0, 22 ) === 'data:image/png;base64,') {
    $CLIENT_SIGNATURE = '<img id="hk" src="' . htmlspecialchars($CLIENT_SIGNATURE) . '" >';
} else {
  $CLIENT_SIGNATURE = null;
}

/**
The HTML code (and some PHP) is kept in PHP variables like $CONTRACT_HTML, $FOOTER, $CONTRACT_SIGNED_PHP, and $CLIENT_DATE_IP_COMPILED.
**/

function headerWithTitle($title) {
  return '<!DOCTYPE html>
  <html>
  <head>
    <meta charset="UTF-8">
    <title>' . $title . '</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="robots" content="noindex">
    <link rel="preconnect" href="https://cdn.skypack.dev">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <style>@import url(https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic) layer(fonts);@import url(https://fonts.googleapis.com/css?family=Arapey) layer(fonts);@import url(https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@75,600;100,400;100,600;100,700;100,800) layer(fonts);@layer reset, accessibility, animated-entrances, forms;@layer from-quill-editor, from-quill-editor-overrides;@layer utility;@layer signatures, buttons;@layer modal;@layer contract-typography;@layer reset{@media print{.noprint{display:none!important}}}@layer reset{*,:after,:before{box-sizing:border-box}body,figure,h1,h2,h3,h4,h5,p,picture{margin:0}h1,h2,h3,h4,h5,h6{font-weight:400}img,picture{display:block;height:auto;max-width:100%}button,input,select,textarea{font:inherit}}@layer colors{:root{--clr-light-hsl:20 80% 98%;--clr-dark-hsl:200 20% 25%;--clr-darker-hsl:200 59% 22%;--clr-primary-hsl:200 75% 30%;--clr-danger-hsl:20 100% 30%;--clr-success-hsl:165 75% 30%;--clr-warning-hsl:36 100% 30%;--clr-blue-500:#136086;--clr-blue-600:#105070;--clr-blue-700:#0d4059;--clr-red-500:#863913;--clr-red-600:#703010;--clr-red-700:#59260d;--clr-green-500:#138669;--clr-green-600:#107058;--clr-green-700:#0d5946;--clr-brown-500:#865813;--clr-brown-600:#704910;--clr-brown-700:#593b0d;--clr-blue-desaturated-500:#395360;--clr-blue-desaturated-600:#263740;--clr-blue-desaturated-700:#131c20;--clr-red-desaturated-500:#604639;--clr-red-desaturated-600:#402f26;--clr-red-desaturated-700:#201713;--clr-green-desaturated-500:#396056;--clr-green-desaturated-600:#264039;--clr-green-desaturated-700:#13201d;--clr-brown-desaturated-500:#605039;--clr-brown-desaturated-600:#403626;--clr-brown-desaturated-700:#201b13}}@layer from-quill-editor{.ql-editor blockquote,.ql-editor h1,.ql-editor h2,.ql-editor h3,.ql-editor h4,.ql-editor h5,.ql-editor h6,.ql-editor ol,.ql-editor p,.ql-editor pre,.ql-editor ul{counter-reset:list-1 list-2 list-3 list-4 list-5 list-6 list-7 list-8 list-9}.ql-editor ol,.ql-editor ul{padding-left:1.5em}.ql-editor ol>li,.ql-editor ul>li{list-style-type:none}.ql-editor ul>li:before{content:"\2022"}.ql-editor li:before{display:inline-block;white-space:nowrap;width:1.2em}.ql-editor li:not(.ql-direction-rtl):before{margin-left:-1.5em;margin-right:.3em;text-align:right}.ql-editor li.ql-direction-rtl:before{margin-left:.3em;margin-right:-1.5em}.ql-editor ol li:not(.ql-direction-rtl),.ql-editor ul li:not(.ql-direction-rtl){padding-left:1.5em}.ql-editor ol li.ql-direction-rtl,.ql-editor ul li.ql-direction-rtl{padding-right:1.5em}.ql-editor ol li{counter-increment:list-0;counter-reset:list-1 list-2 list-3 list-4 list-5 list-6 list-7 list-8 list-9}.ql-editor ol li:before{content:counter(list-0,decimal) ". "}.ql-editor ol li.ql-indent-1{counter-increment:list-1}.ql-editor ol li.ql-indent-1:before{content:counter(list-1,lower-alpha) ". "}.ql-editor ol li.ql-indent-1{counter-reset:list-2 list-3 list-4 list-5 list-6 list-7 list-8 list-9}.ql-editor ol li.ql-indent-2{counter-increment:list-2}.ql-editor ol li.ql-indent-2:before{content:counter(list-2,lower-roman) ". "}.ql-editor ol li.ql-indent-2{counter-reset:list-3 list-4 list-5 list-6 list-7 list-8 list-9}.ql-editor ol li.ql-indent-3{counter-increment:list-3}.ql-editor ol li.ql-indent-3:before{content:counter(list-3,decimal) ". "}.ql-editor ol li.ql-indent-3{counter-reset:list-4 list-5 list-6 list-7 list-8 list-9}.ql-editor ol li.ql-indent-4{counter-increment:list-4}.ql-editor ol li.ql-indent-4:before{content:counter(list-4,lower-alpha) ". "}.ql-editor ol li.ql-indent-4{counter-reset:list-5 list-6 list-7 list-8 list-9}.ql-editor ol li.ql-indent-5{counter-increment:list-5}.ql-editor ol li.ql-indent-5:before{content:counter(list-5,lower-roman) ". "}.ql-editor ol li.ql-indent-5{counter-reset:list-6 list-7 list-8 list-9}.ql-editor ol li.ql-indent-6{counter-increment:list-6}.ql-editor ol li.ql-indent-6:before{content:counter(list-6,decimal) ". "}.ql-editor ol li.ql-indent-6{counter-reset:list-7 list-8 list-9}.ql-editor ol li.ql-indent-7{counter-increment:list-7}.ql-editor ol li.ql-indent-7:before{content:counter(list-7,lower-alpha) ". "}.ql-editor ol li.ql-indent-7{counter-reset:list-8 list-9}.ql-editor ol li.ql-indent-8{counter-increment:list-8}.ql-editor ol li.ql-indent-8:before{content:counter(list-8,lower-roman) ". "}.ql-editor ol li.ql-indent-8{counter-reset:list-9}.ql-editor ol li.ql-indent-9{counter-increment:list-9}.ql-editor ol li.ql-indent-9:before{content:counter(list-9,decimal) ". "}.ql-editor .ql-indent-1:not(.ql-direction-rtl){padding-left:3em}.ql-editor li.ql-indent-1:not(.ql-direction-rtl){padding-left:4.5em}.ql-editor .ql-indent-1.ql-direction-rtl.ql-align-right{padding-right:3em}.ql-editor li.ql-indent-1.ql-direction-rtl.ql-align-right{padding-right:4.5em}.ql-editor .ql-indent-2:not(.ql-direction-rtl){padding-left:6em}.ql-editor li.ql-indent-2:not(.ql-direction-rtl){padding-left:7.5em}.ql-editor .ql-indent-2.ql-direction-rtl.ql-align-right{padding-right:6em}.ql-editor li.ql-indent-2.ql-direction-rtl.ql-align-right{padding-right:7.5em}.ql-editor .ql-indent-3:not(.ql-direction-rtl){padding-left:9em}.ql-editor li.ql-indent-3:not(.ql-direction-rtl){padding-left:10.5em}.ql-editor .ql-indent-3.ql-direction-rtl.ql-align-right{padding-right:9em}.ql-editor li.ql-indent-3.ql-direction-rtl.ql-align-right{padding-right:10.5em}.ql-editor .ql-indent-4:not(.ql-direction-rtl){padding-left:12em}.ql-editor li.ql-indent-4:not(.ql-direction-rtl){padding-left:13.5em}.ql-editor .ql-indent-4.ql-direction-rtl.ql-align-right{padding-right:12em}.ql-editor li.ql-indent-4.ql-direction-rtl.ql-align-right{padding-right:13.5em}.ql-editor .ql-indent-5:not(.ql-direction-rtl){padding-left:15em}.ql-editor li.ql-indent-5:not(.ql-direction-rtl){padding-left:16.5em}.ql-editor .ql-indent-5.ql-direction-rtl.ql-align-right{padding-right:15em}.ql-editor li.ql-indent-5.ql-direction-rtl.ql-align-right{padding-right:16.5em}.ql-editor .ql-indent-6:not(.ql-direction-rtl){padding-left:18em}.ql-editor li.ql-indent-6:not(.ql-direction-rtl){padding-left:19.5em}.ql-editor .ql-indent-6.ql-direction-rtl.ql-align-right{padding-right:18em}.ql-editor li.ql-indent-6.ql-direction-rtl.ql-align-right{padding-right:19.5em}.ql-editor .ql-indent-7:not(.ql-direction-rtl){padding-left:21em}.ql-editor li.ql-indent-7:not(.ql-direction-rtl){padding-left:22.5em}.ql-editor .ql-indent-7.ql-direction-rtl.ql-align-right{padding-right:21em}.ql-editor li.ql-indent-7.ql-direction-rtl.ql-align-right{padding-right:22.5em}.ql-editor .ql-indent-8:not(.ql-direction-rtl){padding-left:24em}.ql-editor li.ql-indent-8:not(.ql-direction-rtl){padding-left:25.5em}.ql-editor .ql-indent-8.ql-direction-rtl.ql-align-right{padding-right:24em}.ql-editor li.ql-indent-8.ql-direction-rtl.ql-align-right{padding-right:25.5em}.ql-editor .ql-indent-9:not(.ql-direction-rtl){padding-left:27em}.ql-editor li.ql-indent-9:not(.ql-direction-rtl){padding-left:28.5em}.ql-editor .ql-indent-9.ql-direction-rtl.ql-align-right{padding-right:27em}.ql-editor li.ql-indent-9.ql-direction-rtl.ql-align-right{padding-right:28.5em}.ql-editor .ql-align-center{text-align:center}.ql-editor .ql-align-justify{text-align:justify}.ql-editor .ql-align-right{text-align:right}}@layer from-quill-editor-overrides{.ql-editor{padding-block:1.5rem;padding-inline:2rem;padding-inline:clamp(.5rem,2.5vw,3rem);padding-inline:clamp(20px,5vw,35px)}.ql-editor>:where(:not(:first-child)){margin-block-start:var(--flow-space,1.5rem)}.ql-editor :where(ul,ol)>:where(:not(:first-child)){margin-block-start:.25rem}.ql-editor :is(ol,ul){padding:0}.ql-editor>p+:is(ul,ol){margin-block-start:.25rem}}@layer accessibility{:where(:focus-visible){outline:3px solid #000;outline-offset:3px}.sr-only{clip:rect(0,0,0,0);border:0;height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;white-space:nowrap;width:1px}.skip-to-content{background-color:hsl(var(--clr-darker-hsl));border-radius:8px;color:hsl(var(--clr-light-hsl));display:block;left:0;margin-inline:auto;margin:0 auto!important;max-width:max-content;opacity:0;outline-offset:1px;padding:.5em 1em;position:fixed;right:0;text-decoration:none;top:1.5rem;transform:translateY(calc(-100% - 5rem - 1px));transition:transform .25s ease-in;z-index:9999}.skip-to-content:hover{background-color:hsl(var(--clr-light-hsl));color:hsl(var(--clr-darker-hsl))}.skip-to-content:focus{opacity:1;transform:translateY(0)}}@layer accessibility{@media (prefers-reduced-motion:reduce){*,:after,:before{animation-duration:.1ms!important;animation-iteration-count:1!important;scroll-behavior:auto!important;transition-duration:auto!important}.animate{animation:none!important}}}@layer buttons{.button,.ql-html-buttonCancel,.ql-html-buttonOk{align-items:center;appearance:none;-webkit-appearance:none;-moz-appearance:none;background:var(--clr-500);border:none;border-radius:8px;color:#fff;cursor:pointer;display:flex;font-family:Open Sans,sans-serif;font-size:16px;font-weight:400;gap:0;justify-content:center;letter-spacing:.025em;line-height:26px;margin:0;max-width:max-content;overflow:hidden;padding:10px 35px;padding-inline:clamp(20px,5vw,35px);padding-inline:clamp(20px,2vw,35px);text-decoration:none;transition:outline .4s cubic-bezier(.22,1,.36,1);-webkit-user-select:none;user-select:none}.button:hover:not([disabled]),.ql-html-buttonCancel:hover:not([disabled]),.ql-html-buttonOk:hover:not([disabled]){background:var(--clr-600)}.button:active:not([disabled]),.ql-html-buttonCancel:active:not([disabled]),.ql-html-buttonOk:active:not([disabled]){background:var(--clr-700);transform:translate(2px 3px);transform:scale(.975);transition:transform .3s cubic-bezier(.22,1,.36,1),outline .4s cubic-bezier(.22,1,.36,1),background-color .2s linear}.button[disabled],.ql-html-buttonCancel[disabled],.ql-html-buttonOk[disabled]{cursor:default;filter:grayscale(.75) contrast(.75) brightness(.96);transition:all .4s cubic-bezier(.22,1,.36,1)}.button:has(.icon){gap:0;padding:0;place-self:center}.button:has(.icon)>*{align-items:center;align-items:space-evenly;display:inline-flex;display:flex;gap:.5ex;height:100%;justify-content:center;padding:10px 35px;padding-inline:clamp(20px,2.5vw,35px);padding-inline:clamp(20px,min(2.5vw,1.5em),35px)}.button:has(.icon) .icon{background-color:transparent;background-color:rgba(0,0,0,.16);font-size:1.5em;padding-inline:clamp(20px,min(2.5vw,1.5em),24px)}.button:has(.icon) .icon.small-padding{padding-inline:10px}.button,.ql-html-buttonCancel,.ql-html-buttonOk{--clr-500:var(--clr-blue-desaturated-500);--clr-600:var(--clr-blue-desaturated-600);--clr-700:var(--clr-blue-desaturated-700)}.button.primary,.ql-html-buttonOk{--clr-500:var(--clr-blue-500);--clr-600:var(--clr-blue-600);--clr-700:var(--clr-blue-700)}.button.danger{--clr-500:var(--clr-red-500);--clr-600:var(--clr-red-600);--clr-700:var(--clr-red-700)}.button.success{--clr-500:var(--clr-green-desaturated-500);--clr-600:var(--clr-green-desaturated-600);--clr-700:var(--clr-green-desaturated-700)}.button.warning,.ql-html-buttonCancel{--clr-500:var(--clr-red-desaturated-500);--clr-600:var(--clr-red-desaturated-600);--clr-700:var(--clr-red-desaturated-700)}.invert-colors .button{background:var(--clr-600);border:1px solid hsla(0,0%,100%,.1);filter:invert(1) hue-rotate(180deg);outline-color:#fff}.invert-colors .button:hover:not([disabled]){background:var(--clr-700)}.invert-colors .button:active:not([disabled]){background:var(--clr-500)}.invert-colors .button[disabled]{cursor:default;filter:grayscale(.75) contrast(.75) brightness(.96) invert(1) hue-rotate(180deg)}.invert-colors .button>*{background-color:rgba(0,0,0,.16)}.invert-colors .button .icon{background-color:transparent;border-inline-start:1px solid hsla(0,0%,100%,.05)}.size-300.button{border-radius:4px;border-radius:6px;padding:5px 18px}.size-300.button:has(.icon){padding:0}.size-300.button:has(.icon)>*{padding:5px 175px;padding-inline:clamp(10px,min(1.25vw,.75em),17.5px)}.size-300.button:has(.icon) .icon{font-size:1.25rem;padding-block:8px;padding-inline:clamp(10px,min(1.25vw,.75em),12px)}}@layer buttons{@media (width<535px){.button{padding:5px 18px}.button:has(.icon){padding:0}.button:has(.icon)>*{padding:5px 175px;padding-inline:clamp(10px,min(1.25vw,.75em),17.5px)}.button:has(.icon) .icon{font-size:1.25rem;padding-block:8px;padding-inline:clamp(10px,min(1.25vw,.75em),12px)}}}@layer utility{.flexi{align-items:center;display:flex;flex-wrap:wrap;gap:clamp(20px,5vw,35px);justify-content:flex-start}.flow>:where(:not(:first-child)){margin-block-start:var(--flow-space,1em)}.hidden{display:none!important}@media (max-width:30em){.hide-small{display:none!important}}@media (max-width:50em){.hide-medium{display:none!important}}.sr-only{clip:rect(0,0,0,0);border:0;height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;white-space:nowrap;width:1px}.border-top{border-top:1px solid hsl(var(--clr-primary-hsl)/.25);margin-block-start:2rem;margin-block-start:6rem;padding-block-start:2.5rem}.margin-top{margin-block-start:3rem}.d-block{display:blok}}@layer forms{:where(input:is([type=text],[type=email],[type=password]),textarea){appearance:none;background-color:hsl(var(--clr-light-hsl)/.6);background-color:hsl(var(--clr-light-hsl)/1);border:1.5px solid hsl(var(--clr-dark-hsl)/.5);border-radius:.25rem;box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06);color:hsl(var(--clr-dark-hsl)/1);font-size:1rem;font-weight:400;mix-blend-mode:luminosity;outline-offset:0;outline-width:1.5px;padding-block:.35rem;padding-inline:.75rem;position:relative;transition:all .3s cubic-bezier(.22,1,.36,1)}:where(input:is([type=text],[type=email],[type=password]),textarea):focus{background-color:hsl(var(--clr-light-hsl)/1);border:1.5px solid hsl(var(--clr-darker-hsl)/.8);color:hsl(var(--clr-darker-hsl)/1)}:where(input:is([type=text],[type=email],[type=password]),textarea)::placeholder{color:hsl(var(--clr-dark-hsl)/.75)}:where(input:is([type=text],[type=email],[type=password]),textarea):focus::placeholder{color:hsl(var(--clr-dark-hsl)/.75)}label{color:var(--clr-blue-desaturated-700);font-weight:600;letter-spacing:-.0175em}label:has(svg){align-items:center;column-gap:.25em;display:flex;justify-content:center}label:has(svg) svg{color:var(--clr-blue-700);height:1.5rem;width:1.5rem}}@layer contract-typography{:root{--step--2:clamp(0.56rem,calc(0.8rem - 0.51vw),0.69rem);--step--1:clamp(0.75rem,calc(0.9rem - 0.32vw),0.83rem);--step-0:clamp(1.00rem,1rem,1.00rem);--step-1:clamp(1.20rem,calc(1.1rem + 0.51vw),1.33rem);--step-2:clamp(1.44rem,calc(1.18rem + 1.3vw),1.78rem);--step-3:clamp(1.73rem,calc(1.23rem + 2.47vw),2.37rem);--step-4:clamp(2.07rem,calc(1.24rem + 4.18vw),3.16rem);--step-5:clamp(2.49rem,calc(1.16rem + 6.63vw),4.21rem)}#content{background:#fff;margin:2rem 2rem 6rem;margin-inline:0;margin-inline:auto;max-width:calc(100% - 2rem);max-width:100%;padding:0 2em;padding-inline:2rem;width:clamp(10rem,60rem,80rem);width:52em;width:210mm}#content,#main{font-family:Libre Baskerville,serif;font-size:var(--step-0);line-height:1.5;line-height:1.75}h2,h3,h4,h5,h6{margin-block-start:1.75em}h1{border-style:solid;border-width:3px 0 1px;font-family:Arapey,serif;font-size:var(--step-2);font-weight:400;letter-spacing:.15em;margin-block-end:2.5rem;margin-block-start:1rem;padding:.5em 0;position:relative;text-align:center}h1,h2{line-height:1.2em;text-transform:uppercase}h2{font-family:Open Sans Condensed,sans-serif;font-family:Open Sans,sans-serif;font-size:var(--step-1);font-variation-settings:"wdth" 75;font-weight:600;letter-spacing:.025em}h3,h4,h5,h6{font-weight:700}}@layer signatures{.compiled-signatures{display:flex;flex-wrap:wrap;gap:2rem;justify-content:space-around}.compiled-signature{align-items:start;display:grid;font-size:.75em;max-width:min(50%,330px);max-width:clamp(50% - 2rem,348px,100%);min-width:300px;min-width:200px}.compiled-signature img{background:#fff;border:1px solid rgba(3,33,48,.25);margin-block:.15rem}#dev_signature,#hk{display:block;max-width:min(333px,100%);max-width:min(370px,100%)}#dev_signature[src=null]{display:none}.date-ip{font-family:Open Sans Condensed,sans-serif;font-family:Open Sans,sans-serif;font-size:1.2em;font-variation-settings:"wdth" 75;font-weight:400;letter-spacing:.025em;line-height:1.2em}#ui-unsigned{margin:0;margin-block-start:var(--flow-space,1.5rem)}#ui-signed{clear:both}#content>:not(#ui-unsigned,#dev_signature){transition:opacity .3s ease-out}#signature-container{display:grid;gap:1.5rem;place-items:start}@media (min-width:40rem){#signature-container{place-items:end}}#canvas-container{aspect-ratio:188/58.66;background:#fff;isolation:isolate;max-width:100%;position:relative;transition:max-width .4s cubic-bezier(.22,1,.36,1),margin .6s ease-in-out;-webkit-user-select:none;user-select:none;width:100%}#canvas-container:before{border-bottom:2px solid #61594f;content:"";display:block;height:0;inset:70% 7.5% 0 7.5%;opacity:.95;pointer-events:none;position:absolute;z-index:-1}}@layer signatures{@media (max-width:40em){#canvas-container{aspect-ratio:200/80}}}@layer signatures{#generator-signature-pad,#signature-pad{border:2px dashed rgba(3,33,48,.75);box-shadow:inset 0 0 5px 1px #ddd;height:100%;left:0;position:absolute;top:0;width:100%}#signature-controls{align-items:flex-start;display:flex;flex-direction:row;gap:1.5rem;justify-content:center;width:100%}.loading-signed{align-items:center;justify-content:center}@media (min-width:40rem){.loading-signed{justify-content:center}}.loading-signed:not(.hidden){display:flex}.to-go{opacity:1;transform:none;transition:all .2s cubic-bezier(.26,.53,.74,1.48),scale 1s ease-out}.to-go.gone{opacity:0;transform:translateY(-20px)}#canvas-container.just-signed{max-width:333px}@media (min-width:40rem){#canvas-container.just-signed{margin-top:calc(-330px - 2rem)}}#canvas-container.just-signed #signature-pad{border:1px dashed rgba(3,33,48,.25);box-shadow:inset 0 0 2px 1px hsla(0,0%,87%,.25)}#canvas-container.just-signed:before{opacity:0}}@layer modal{.modal{--shadow-color:200 3% 15%;--shadow-strength:5%;--shadow-6:0 -1px 2px 0 hsl(var(--shadow-color)/calc(var(--shadow-strength) + 2%)),0 3px 2px -2px hsl(var(--shadow-color)/calc(var(--shadow-strength) + 3%)),0 7px 5px -2px hsl(var(--shadow-color)/calc(var(--shadow-strength) + 3%)),0 12px 10px -2px hsl(var(--shadow-color)/calc(var(--shadow-strength) + 4%)),0 22px 18px -2px hsl(var(--shadow-color)/calc(var(--shadow-strength) + 5%)),0 41px 33px -2px hsl(var(--shadow-color)/calc(var(--shadow-strength) + 6%)),0 100px 80px -2px hsl(var(--shadow-color)/calc(var(--shadow-strength) + 7%));border:3px solid hsl(var(--shadow-color));border-radius:1.5rem;box-shadow:var(--shadow-6);margin-block-start:auto;max-width:calc(100% - 1rem);padding:0;position:fixed;z-index:999}.modal::backdrop{-webkit-backdrop-filter:blur(4px);backdrop-filter:blur(4px);background-image:linear-gradient(132deg,rgba(31,39,41,.6),rgba(35,41,47,.6));cursor:pointer}.close-button{border-radius:50%;height:32px;margin:1rem 0 0;max-width:32px;padding:0;position:relative;vertical-align:top;width:32px}.close-button:active{background-color:#000;transition:none}.close-button:before{height:2px;width:50%}.close-button:after{height:50%;width:2px}.close-button:after,.close-button:before{background-color:currentColor;content:"";display:block;left:50%;position:absolute;top:50%;transform:translateX(-50%) translateY(-50%) rotate(45deg);transform-origin:center center}.qr-code-container{display:grid;gap:1rem;justify-items:end;margin-block-end:3.5rem;margin-inline:1rem}#generator-qr-code,#qr-code{display:block;image-rendering:pixelated;margin:auto;max-width:90%;width:min(500px,90vw)}}@layer animated-entrances{@media (prefers-reduced-motion:reduce){.animate{animation:none!important}}}@layer animated-entrances{.delay-1{animation-delay:.6s}.delay-2{animation-delay:.7s}.delay-3{animation-delay:.8s}.delay-4{animation-delay:.9s}.delay-5{animation-delay:1s}.delay-6{animation-delay:1.1s}.delay-7{animation-delay:1.2s}.delay-8{animation-delay:1.3s}.delay-9{animation-delay:1.4s}.delay-10{animation-delay:1.5s}.delay-11{animation-delay:1.6s}.delay-12{animation-delay:1.7s}.delay-13{animation-delay:1.8s}.delay-14{animation-delay:1.9s}.delay-15{animation-delay:2s}.delay-16{animation-delay:2.1s}:where(.animate){animation-delay:.5s;animation-duration:.75s;animation-fill-mode:backwards;animation-name:animate-fade;animation-timing-function:cubic-bezier(.26,.53,.74,1.48)}:where(.animate).fade{animation-name:animate-fade;animation-timing-function:ease}:where(.animate).pop{animation-name:animate-pop}:where(.animate).blur{animation-name:animate-blur;animation-timing-function:ease}:where(.animate).glow{animation-name:animate-glow;animation-timing-function:ease}:where(.animate).grow{animation-name:animate-grow}:where(.animate).splat{animation-name:animate-splat}:where(.animate).roll{animation-name:animate-roll}:where(.animate).flip{animation-name:animate-flip;perspective:1000px;transform-style:preserve-3d}:where(.animate).spin{animation-name:animate-spin;perspective:1000px;transform-style:preserve-3d}:where(.animate).slide{animation-name:animate-slide}:where(.animate).drop{animation-name:animate-drop;animation-timing-function:cubic-bezier(.77,.14,.91,1.25)}:where(.animate).drop-up{animation-name:animate-drop-up;animation-timing-function:cubic-bezier(.77,.14,.91,1.25)}}@layer animated-entrances{@media screen{@keyframes animate-fade{0%{opacity:0}to{opacity:1}}@keyframes animate-pop{0%{opacity:0;transform:scale(.5)}to{opacity:1;transform:scale(1)}}@keyframes animate-blur{0%{filter:blur(15px);opacity:0}to{filter:blur(0);opacity:1}}@keyframes animate-glow{0%{filter:brightness(3) saturate(3);opacity:0;transform:scale(.8)}to{filter:brightness(1) saturate(1);opacity:1;transform:scale(1)}}@keyframes animate-grow{0%{opacity:0;transform:scaleY(0);visibility:hidden}to{opacity:1;transform:scale(1)}}@keyframes animate-splat{0%{opacity:0;transform:scale(0) rotate(20deg) translateY(-30px)}70%{opacity:1;transform:scale(1.1) rotate(15deg)}85%{opacity:1;transform:scale(1.1) rotate(15deg) translateY(-10px)}to{opacity:1;transform:scale(1) rotate(0) translate(0)}}@keyframes animate-roll{0%{opacity:0;transform:scale(0) rotate(1turn)}to{opacity:1;transform:scale(1) rotate(0deg)}}@keyframes animate-flip{0%{opacity:0;transform:rotateX(-120deg) scale(.9)}to{opacity:1;transform:rotateX(0deg) scale(1)}}@keyframes animate-spin{0%{opacity:0;transform:rotateY(-120deg) scale(.9)}to{opacity:1;transform:rotateY(0deg) scale(1)}}@keyframes animate-slide{0%{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translate(0)}}@keyframes animate-drop{0%{opacity:0;transform:translateY(-300px) scale(.9,1.1)}95%{opacity:1;transform:translate(0) scale(.9,1.1)}96%{opacity:1;transform:translate(10px) scale(1.2,.9)}97%{opacity:1;transform:translate(-10px) scale(1.2,.9)}98%{opacity:1;transform:translate(5px) scale(1.1,.9)}99%{opacity:1;transform:translate(-5px) scale(1.1,.9)}to{opacity:1;transform:translate(0) scale(1)}}@keyframes animate-drop-up{0%{opacity:0;transform:translateY(300px) scale(.9,1.1)}95%{opacity:1;transform:translate(0) scale(.9,1.1)}96%{opacity:1;transform:translate(-10px) scale(1.2,.9)}97%{opacity:1;transform:translate(10px) scale(1.2,.9)}98%{opacity:1;transform:translate(-5px) scale(1.1,.9)}99%{opacity:1;transform:translate(5px) scale(1.1,.9)}to{opacity:1;transform:translate(0) scale(1)}}}}details{--clr-500:var(--clr-blue-500);--clr-600:var(--clr-blue-600);--clr-700:var(--clr-blue-700);--clr-500-desaturated:var(--clr-blue-desaturated-500);--clr-600-desaturated:var(--clr-blue-desaturated-600);--clr-700-desaturated:var(--clr-blue-desaturated-700);margin-inline-start:-.75rem;margin-inline-start:-.81rem;max-height:1.5em;overflow:hidden;transition:all .4s ease-in-out}@media (width < 535px){details>:not(summary){margin-inline-start:.75rem}}details details{margin-inline-start:0}details[open]{max-height:90vh}details[open] summary{padding-block-end:.5em}@media (width > 360px){details:has(.repeater-item:nth-child(4)){max-height:unset}}@media (width <= 360px){details:has(.repeater-item:nth-child(2)){max-height:unset}}details.danger{--clr-primary-hsl:var(--clr-danger-hsl);--clr-500:var(--clr-red-500);--clr-600:var(--clr-red-600);--clr-700:var(--clr-red-700);--clr-500-desaturated:var(--clr-red-desaturated-500);--clr-600-desaturated:var(--clr-red-desaturated-600);--clr-700-desaturated:var(--clr-red-desaturated-700)}details.success{--clr-primary-hsl:var(--clr-success-hsl);--clr-500:var(--clr-green-500);--clr-600:var(--clr-green-600);--clr-700:var(--clr-green-700);--clr-500-desaturated:var(--clr-green-desaturated-500);--clr-600-desaturated:var(--clr-green-desaturated-600);--clr-700-desaturated:var(--clr-green-desaturated-700)}details.warning{--clr-primary-hsl:var(--clr-warning-hsl);--clr-500:var(--clr-brown-500);--clr-600:var(--clr-brown-600);--clr-700:var(--clr-brown-700);--clr-500-desaturated:var(--clr-brown-desaturated-500);--clr-600-desaturated:var(--clr-brown-desaturated-600);--clr-700-desaturated:var(--clr-brown-desaturated-700)}details>summary{color:var(--clr-500);color:var(--clr-600);cursor:pointer;font-family:inherit;font-size:16px;font-weight:700;letter-spacing:-.025em;line-height:26px;max-width:min-content;transition:outline .4s cubic-bezier(.22,1,.36,1),padding .2s ease-in;-webkit-user-select:auto;user-select:auto;white-space:nowrap}details>summary:hover{background:none;color:var(--clr-700)}details>summary:focus-visible{border-radius:8px;color:#000;outline:none;text-decoration:underline;text-decoration-thickness:2;text-underline-position:under}details>summary:focus-visible::marker{color:inherit}details>summary::marker{color:var(--clr-600-desaturated);color:hsl(var(--clr-primary-hsl)/.8)}details>summary:hover::marker{color:inherit}details>summary:active{transform:scale(.975);transition:transform .3s cubic-bezier(.22,1,.36,1),outline .4s cubic-bezier(.22,1,.36,1),background-color .2s linear}details>.panel{background:hsl(var(--clr-primary-hsl)/.1);border:1.5px solid hsl(var(--clr-primary-hsl)/.075);border-radius:8px;gap:1rem;justify-content:flex-start;padding:.75rem 1rem 1rem;position:relative}details>.panel label{color:var(--clr-700-desaturated);font-weight:600;letter-spacing:-.0175em}details>.panel>p:last-child:not([class]){color:var(--clr-500-desaturated)}.panel>small{text-wrap:balance;display:block;display:grid;font-weight:600;gap:1em;line-height:1.75;opacity:75%}</style>
  </head>
  <body>
  <div id="content" class="ql-editor">
  ';
}

if($CLIENT_SIGNATURE==null) {
  /** 
  ⌛ Waiting for Client to sign: include signature elements and javascript 
  **/

  $HEADER = headerWithTitle('Unsigned Contract');

  $FOOTER = '
  <div id="ui-unsigned">  
    <form method="post" class="noprint" id="signature_form">
        <div id="signature-container">
            <div id="canvas-container">
                <canvas id="signature-pad" class="signature-pad" width="188" height="58.66"></canvas>
            </div>
        </div>
    
        <div class="animate slide">
            <div class="no-print margin-top invert-colors flexi | to-go | animate slide">
                <button id="reset" title="Clear Signature" type="button" class="icon-button button warning">
                    <span class="hide-medium">Clear</span>
                    <span class="icon">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.454,19.028h-7.01l6.62-6.63a2.935,2.935,0,0,0,.87-2.09,2.844,2.844,0,0,0-.87-2.05l-3.42-3.44a2.93,2.93,0,0,0-4.13.01L3.934,13.4a2.946,2.946,0,0,0,0,4.14l1.48,1.49H3.554a.5.5,0,0,0,0,1h16.9A.5.5,0,0,0,20.454,19.028Zm-7.24-13.5a1.956,1.956,0,0,1,2.73,0l3.42,3.44a1.868,1.868,0,0,1,.57,1.35,1.93,1.93,0,0,1-.57,1.37l-5.64,5.64-6.15-6.16Zm-1.19,13.5h-5.2l-2.18-2.2a1.931,1.931,0,0,1,0-2.72l2.23-2.23,6.15,6.15Z"></path>
                        </svg>
                    </span>
                </button>
    
                <button id="show-modal-qr" type="button" class="open-button | icon-button button">
                    <span class="hide-small">Sign on mobile</span>
                    <span class="icon">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" viewBox="0 0 16 16" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 1h-4v4h4v-4zM6 0v0 6h-6v-6h6zM2 2h2v2h-2zM15 1h-4v4h4v-4zM16 0v0 6h-6v-6h6zM12 2h2v2h-2zM5 11h-4v4h4v-4zM6 10v0 6h-6v-6h6zM2 12h2v2h-2zM7 0h1v1h-1zM8 1h1v1h-1zM7 2h1v1h-1zM8 3h1v1h-1zM7 4h1v1h-1zM8 5h1v1h-1zM7 6h1v1h-1zM7 8h1v1h-1zM8 9h1v1h-1zM7 10h1v1h-1zM8 11h1v1h-1zM7 12h1v1h-1zM8 13h1v1h-1zM7 14h1v1h-1zM8 15h1v1h-1zM15 8h1v1h-1zM1 8h1v1h-1zM2 7h1v1h-1zM0 7h1v1h-1zM4 7h1v1h-1zM5 8h1v1h-1zM6 7h1v1h-1zM9 8h1v1h-1zM10 7h1v1h-1zM11 8h1v1h-1zM12 7h1v1h-1zM13 8h1v1h-1zM14 7h1v1h-1zM15 10h1v1h-1zM9 10h1v1h-1zM10 9h1v1h-1zM11 10h1v1h-1zM13 10h1v1h-1zM14 9h1v1h-1zM15 12h1v1h-1zM9 12h1v1h-1zM10 11h1v1h-1zM12 11h1v1h-1zM13 12h1v1h-1zM14 11h1v1h-1zM15 14h1v1h-1zM10 13h1v1h-1zM11 14h1v1h-1zM12 13h1v1h-1zM13 14h1v1h-1zM10 15h1v1h-1zM12 15h1v1h-1zM14 15h1v1h-1z">
                            </path>
                        </svg>
                    </span>
                </button>
    
                <button id="submit-btn" disabled 
                    style="margin-inline-start: auto;"
                    type="submit" class="icon-button button success">
                    <span>Sign</span>
                    <span class="icon">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-width="2" d="M2,12 L22,12 M13,3 L22,12 L13,21"></path>
                        </svg>
                    </span>
                </button>
            </div>
        </div>
    
        <div class="flow" style="max-width: 330px; margin-inline-start: auto;">
            <h2 class="margin-top loading-signed hidden | animate slide" style="color: var(--clr-green-500); font-weight: 700;">Saving contract…</h2>
            <small class="loading-signed hidden | animate slide delay-16"
                style="font-family: \'Open Sans\'; font-weight: 600; color: var(--clr-blue-700);">
                This shouldn\'t take more than a minute.
            </small>
        </div>
    
        <input type="hidden" id="client_signature" name="client_signature" />
    </form>
    
    
    <dialog class="modal flow" id="modal-qr">
        <div class="qr-code-container">
            <button id="close-modal-qr" class="close-button button" aria-label="close" type="button"></button>
            <canvas id="qr-code"></canvas>
        </div>
    </dialog>
  </div><!--.ui-unsigned-->
  </div> <!-- #content -->
  <script id="contract_script_unsigned" type="module">
  import SignaturePad from "https://cdn.skypack.dev/pin/signature_pad@v4.1.3-nYxPKR50YjQN4V2vbxta/mode=imports,min/optimized/signature_pad.js"
  // 📙 Package Documentation: https://www.skypack.dev/view/signature_pad
  
  signature("#signature-pad")
  
  function signature(selector) {
  
      if (!document.querySelector(selector)) return
  
      const canvas = document.querySelector(selector)
  
      // https://github.com/szimek/signature_pad#options
      const clientSignaturePad = new SignaturePad(canvas, {
          penColor: "hsl(200, 100%, 30%)",
          minDistance: 2,
      })
  
      resizeCanvas()
  
      if (localStorage.getItem("client_signature")) {
          document.querySelector("#submit-btn").disabled = false
          // document.querySelector("#reset").disabled = false
      }
  
  
      // event listeners
  
      // save signature to localStorage on change
      clientSignaturePad.addEventListener("afterUpdateStroke", () => {
          let data = clientSignaturePad.toDataURL("image/png")
  
          document.querySelector("#client_signature").value = data
          localStorage.setItem("client_signature", data)
  
          // ! probably remove these:
          document.querySelector("#submit-btn").disabled = false
          // document.querySelector("#reset").disabled = false
      })
  
      // button to reset signature
      document.querySelector("#reset")?.addEventListener("click", (e) => {
          clientSignaturePad.clear()
          localStorage.removeItem("client_signature")
          document.querySelector("#client_signature").value = null
          document.querySelector("#submit-btn").disabled = true
          // document.querySelector("#reset").disabled = true
      })
  
      // form submit
      document.querySelector("#signature_form").addEventListener("submit", (e) => {
          // e.preventDefault();
          e.target.querySelector(".to-go").classList.add("gone")
  
          e.target.querySelectorAll(".loading-signed").forEach((el) => {
              el.classList.remove("hidden")
          })
  
          e.target.querySelector("#canvas-container").classList.add("just-signed")
  
          e.target.querySelector(".to-go").addEventListener(\'transitionend\', (e) => {
              e.target.classList.add("hidden")
          })
  
          let otherElements = document.querySelectorAll("#content > *:not(#ui-unsigned, #dev_signature)")
          otherElements.forEach(element => {
              // element.style.cssText = `opacity: .5;`
              element.style.opacity = "0.5"
          })
  
      })
      
      window.onresize = resizeCanvas
  
  
      // needed for retina displays
      function resizeCanvas() {
          const ratio = Math.max(window.devicePixelRatio || 1, 1)
          canvas.width = canvas.offsetWidth * ratio
          canvas.height = canvas.offsetHeight * ratio
          canvas.getContext("2d").scale(ratio, ratio)
  
          let data = localStorage.getItem("client_signature");
          if (data) {
              // console.log(data)
              clientSignaturePad.fromDataURL(data)
              // disableResetButtonIfSignatureIsEmpty(data)
              document.querySelector("#client_signature").value = data
          }
      }
  
  }
  </script>
  <script id="qr_code_script" type="module">
  import QRious from "https://cdn.skypack.dev/pin/qrious@v4.0.2-vbPhILY2CQRjQ1N29BGh/mode=imports,min/optimized/qrious.js";
  // 📙 Package Documentation:  https://www.skypack.dev/view/qrious
  
  qrCode("#qr-code")
  
  export default function qrCode(selector) {
      
      if (!document.querySelector(selector)) return
      
      const canvas = document.querySelector(selector)
  
      let qr = new QRious({
          element: canvas,
          value: window.location.href,
          foreground: "hsl(200, 30%, 20%)",
          padding: 0,
          size: 500,
      })
  
      // event listeners
  
      const modal = document.querySelector("#modal-qr")
      const openModal = document.querySelector("#show-modal-qr")
      const closeModal = document.querySelector("#close-modal-qr")
  
      openModal?.addEventListener("click", (e) => {
          if (modal?.open === false)
              modal.showModal()
      })
  
      closeModal?.addEventListener("click", (e) => {
          modal?.close()
      })
  
      // close modal when click events happen outside of it
      modal?.addEventListener("click", (e) => {
          const rect = modal.getBoundingClientRect()
          if (
              e.clientY < rect.top ||
              e.clientY > rect.bottom ||
              e.clientX < rect.left ||
              e.clientX > rect.right
          ) {
              modal.close()
          }
      })
  }
  
  </script>
  </body>
  </html>';
  
  if ( $selfDelete && file_exists($htmlName) ) {
    header('Location: '.$htmlName.'#hk');
    die();
  }

  echo $HEADER;
  echo $CONTRACT_HTML;
  echo $DEV_SIGNATURE;
  eval (' ?>'. $FOOTER .'<?php '); // php variables can be used inside
}
else {
  /** 
  ✅ Contract was just signed: put $CLIENT_SIGNATURE and the other parts in the .html file 
  **/

  $HEADER = headerWithTitle('Signed Contract');

  $DEV_DATE_IP = '
    <div class="date-ip">
      <strong>Signed on:</strong> ' . $devTimestamp . '
      <br><strong>IP address:</strong> '  . $devIP . ' <br>
    </div>';
  $DEV_SIGNATURE .= $DEV_DATE_IP;

  /**
  $CLIENT_DATE_IP_PHP is a string of php code,
  that gets compiled below, in $CLIENT_DATE_IP_COMPILED
  **/
 
  $CLIENT_DATE_IP_PHP = $CONTRACT_SIGNED_PHP. '
    <div id="date-ip" class="date-ip">
      <strong>Signed on:</strong> <?php echo get_client_date($devTimeOffset); ?>
      <br><strong>IP address:</strong> <?php echo get_client_ip_env(); ?><br>
    </div>
  ';

  /** 
  $CLIENT_DATE_IP_COMPILED executes the php code above
  **/
  ob_start(); // https://cgd.io/2008/how-to-execute-php-code-in-a-php-string/
  eval($CLIENT_DATE_IP_PHP);
  $CLIENT_DATE_IP_COMPILED = ob_get_contents();
  ob_end_clean();

  $CLIENT_SIGNATURE .= $CLIENT_DATE_IP_COMPILED;

  // Add names above signatures
  $DEV_SIGNATURE = '<strong>'.$devName.'</strong>' . $DEV_SIGNATURE;
  $CLIENT_SIGNATURE = '<strong>'.$clientName.'</strong>' . $CLIENT_SIGNATURE;

  $FOOTER = '
    <div class="compiled-signatures">
      <div class="compiled-signature">'.$DEV_SIGNATURE. '</div><!--.compiled-signature-->
      <div class="compiled-signature">'.$CLIENT_SIGNATURE.'</div><!--.compiled-signature-->
    </div><!--.compiled-signatures-->
    <div id="ui-signed">  
      <div class="noprint margin-top invert-colors flexi | animate slide delay-3"
           style="justify-content: center;">
          <button class="icon-button button" type="button" onclick="printContract()">
              <span>Print</span>
              <span class="icon">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em"
                      width="1em" xmlns="http://www.w3.org/2000/svg">
                      <path d="M820 436h-40c-4.4 0-8 3.6-8 8v40c0 4.4 3.6 8 8 8h40c4.4 0 8-3.6 8-8v-40c0-4.4-3.6-8-8-8zm32-104H732V120c0-4.4-3.6-8-8-8H300c-4.4 0-8 3.6-8 8v212H172c-44.2 0-80 35.8-80 80v328c0 17.7 14.3 32 32 32h168v132c0 4.4 3.6 8 8 8h424c4.4 0 8-3.6 8-8V772h168c17.7 0 32-14.3 32-32V412c0-44.2-35.8-80-80-80zM360 180h304v152H360V180zm304 664H360V568h304v276zm200-140H732V500H292v204H160V412c0-6.6 5.4-12 12-12h680c6.6 0 12 5.4 12 12v292z">
                      </path>
                  </svg>
              </span>
          </button>
      </div>
    </div><!--.ui-signed-->
  </div> <!--#content-->
  <script id="contract_script_signed">
  function printContract() {
      window.print();
  }
  </script>
  </body>
  </html>';

  $output = $HEADER . $CONTRACT_HTML . $FOOTER;
  file_put_contents($htmlName, $output);

  /** 
  ✉ Email client & dev
  **/
  sendEmails($clientEmail, $devEmail);


  /** 
  ➡ Delete php, redirect to html
  **/
  if ($selfDelete) unlink(__FILE__);
  header('Location: '.$htmlName.'#hk');
  die();
}


// Function to email notifications; gets called when Client signs
function sendEmails($clientEmail, $devEmail)
{
  if ($clientEmail) {
    $headers = "From: " . $devEmail . "\r\nMIME-Version: 1.0\r\nContent-Type: text/html; charset=ISO-8859-1\r\n";
    $msg = 'The contract was signed. You can <a href="' . getHtmlUrl() . '">view or download this contract from here</a>.';
    mail($clientEmail, 'Contract signed', $msg, $headers);
  }
  if ($devEmail) {
    $headers = "From: " . $clientEmail . "\r\nMIME-Version: 1.0\r\nContent-Type: text/html; charset=ISO-8859-1\r\n";
    $msg = '<p>A new contract was signed. You can <a href="' . getHtmlUrl() . '">view or download this contract from here</a>.</p>';
    $msg .= 'The contract was signed by: ' . $clientEmail;
    mail($devEmail, 'Contract signed!', $msg, $headers);
  }
}
?>
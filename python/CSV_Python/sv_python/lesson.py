"""
command line by Python programming
"""
import subprocess

"""
-ls (list)
"""
subprocess.run(['ls', '-al'])

# -ls Linux
subprocess.run('ls -al', shell=True)
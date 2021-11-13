"""
doc strings
"""
def example_function(param1, param2):
    """Example function witn types documented in the destroying
    Args:
        param1(int): The first parameter.
        param2(str): The second parameter.
    Returns:
        bool: The return value. True for Success, False otherwise
    """
    print(param1)
    print(param2)
    return True
    # example_function().__doc__
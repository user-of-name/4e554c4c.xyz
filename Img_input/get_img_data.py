import os
from PIL import Image
from PIL.ExifTags import TAGS

def get_exif_data(image_path):
    image = Image.open(image_path)
    exif_data = image._getexif()
    if exif_data is not None:
        return {TAGS.get(tag): value for tag, value in exif_data.items()}
    return {}

def print_exif_data(folder_path):
    display_order = 1
    for filename in os.listdir(folder_path):
        if filename.lower().endswith(('.png', '.jpg', '.jpeg', '.tiff', '.bmp', '.gif')):
            image_path = os.path.join(folder_path, filename)
            exif_data = get_exif_data(image_path)
            print(f"('{filename}',")
            print("1060,")
            for tag, value in exif_data.items():
                if tag == 'DateTimeOriginal':
                    print(f"'{value}',")
            print("'Krustpils',")
            print("'image_title_en:varchar',")
            print("'image_title_lv:varchar',")
            print(f"{display_order},")
            print("0),")
            print("\n")
            display_order += 1

folder_path = 'img_input/input'
print_exif_data(folder_path)
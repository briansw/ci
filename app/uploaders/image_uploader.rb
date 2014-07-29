class ImageUploader < Admin::AttachmentUploader

  # Brb currently requires MiniMagick for Admin Versions
  include CarrierWave::MiniMagick
  # include CarrierWave::RMagick

  # Choose what kind of storage to use for this uploader:
  storage :file
  # storage :fog

  # Override the directory where uploaded files will be stored.
  # This is a sensible default for uploaders that are meant to be mounted:
  def store_dir
    "uploads/#{model.class.to_s.underscore}/#{mounted_as}/#{model.id}"
  end

  version :c1, if: :image? do
    process quality: 90
    process resize_to_fit: [400, 750]
  end

  version :c2, if: :image? do
    process quality: 90
    process resize_to_fit: [800, 1500]
  end

  version :c3, if: :image? do
    process quality: 90
    process resize_to_fit: [2000, 3700]
  end

end